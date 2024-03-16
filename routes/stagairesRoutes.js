const express = require("express");

const router = express.Router();

const stagairesController = require("../controllers/stagairesController");

router.get("/", stagairesController.getAllStagaires);

router.get("/edit/:id", stagairesController.editstagaie);

router.get("/create", stagairesController.getCreateStagaire);

router.post("/update", stagairesController.updatestagaire);

router.delete("/delete/:id", stagairesController.deleteStagaire);

router.post("/add", stagairesController.createUser);

module.exports = router;
