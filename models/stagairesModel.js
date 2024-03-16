const mongoose = require("mongoose");

const stagaireShema = new mongoose.Schema({
  name: String,
  email: String,
  age: Number,
});

stagaireShema.statics.createStagaire = async function (stagaireData) {
  try {
    return await this.create(stagaireData);
  } catch (err) {
    throw new Error(err.message);
  }
};

stagaireShema.statics.getAllStagairesRes = async function () {
  try {
    return await this.find();
  } catch (err) {
    throw new Error(err.message);
  }
};

stagaireShema.statics.deletes = async function (id) {
  try {
    return await this.deleteOne({ _id: id });
  } catch (err) {
    throw new Error(err.message);
  }
};

stagaireShema.statics.getById = async function (idstagaire) {
  try {
    return await this.findOne({ _id: idstagaire });
  } catch (err) {
    throw new Error(err.message);
  }
};

stagaireShema.statics.updates = async function (data) {
  try {
    return await this.updateOne({ _id: data.id }, data );
  } catch (err) {
    throw new Error(err.message);
  }
};

module.exports = mongoose.model("mvcs", stagaireShema);
