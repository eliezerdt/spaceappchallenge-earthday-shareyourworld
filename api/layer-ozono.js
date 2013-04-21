 exports.GetLayerInfo = function(req, res) {
     /*
     // El tipo de lectura
     var lecture= req.params.lectureType;
     // capa
     var layer = req.params.layer;
     //se recibe el mes a consultar
     var month = req.params.month;
     // parametro año
     var year = req.params.year;
     
    var fs = require('fs');
    // Read the file from ftp
      fs.readFile("ftp://aftp.cmdl.noaa.gov/data/"+layer+"/"+lecture+"/ldr/o3_ldr_surface-insitu_1_ozwv_hour_"+year+".txt", 'utf-8', function (error, data) {
         //recorrer archivo de texto
      });
      */
    //Arreglo de datos a devolver
    var data = [
    {
        layer: "ISS",
        length: "14.610038",
        latitude: "-90.505629",
        date: "2013",
        value: "9.009",
        description: "Descomposicion del aire"
    }
    ];
    res.send(data);
};