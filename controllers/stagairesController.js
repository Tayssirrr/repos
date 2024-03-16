const mvc = require("../models/stagairesModel");

const userController = {
  getCreateStagaire: (req, res) => {
    res.render("create");
  },

  createUser: async (req, res) => {
    const { name, email, age } = req.body;
    try {
      const newStagaire = await mvc.createStagaire({ name, email, age });
      res.redirect("/stagaires");
    } catch (err) {
      res.status(400).json({ message: err.message });
    }
  },

  getAllStagaires: async (req, res) => {
    try {
      const stagaires = await mvc.getAllStagairesRes(); 
      res.render("index", { stagaires });
    } catch (err) {
      res.status(500).json({ message: err.message });
    }
  },

  deleteStagaire: async (req, res) => {
    const id = req.params.id;
    try {
          await mvc.deletes(id);
          res.status(200).json({ status: "OK", message: "Success" });
          res.redirect("/stagaires");
         
    } catch (err) {
        res.status(500).json({ message: 'Stagaire supprimé avec succès.' });
    }
  },

  editstagaie: async (req, res) => {
    const id = req.params.id; 
    try {
      const stagaire = await mvc.getById(id);
      res.render("edit", { stagaire });
    } catch (err) {
      res.status(500).json({ message: err.message });
    }
},



updatestagaire: async (req, res) => {
  const { name, email, age, id } = req.body;
  try {
    await mvc.updates({ name, email, age, id });
    res.redirect("/stagaires");
  } catch (err) {
    res.status(500).json({ message: err.message });
  }
}






};

module.exports = userController;
