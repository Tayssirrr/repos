const express = require('express');
const mongoose = require('mongoose');
const userRoutes = require('./routes/stagairesRoutes');
const path = require("path");
const $ = require("jquery");


const app = express();

const PORT = process.env.PORT || 3000;

mongoose.connect("mongodb://127.0.0.1:27017/mvc")

.then(()=>{
    console.log("connect to DB ")

    app.listen(PORT,()=>console.log("server is running "))
})
.catch((err)=>console.log(err))

app.use(express.urlencoded({ extended: true }));

app.set('view engine', 'ejs');
app.use("/node_modules", express.static(path.join(__dirname, "node_modules")));
app.use('/stagaires',userRoutes);


