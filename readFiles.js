// Read the file.
      fs.readFile("ftp://aftp.cmdl.noaa.gov/data/ozone/surface/ldr/o3_ldr_surface-insitu_1_ozwv_hour_2003.txt", 'utf-8', function (error, data) {
         // Write headers.
         response.writeHead(200, {
            'Content-Type': 'text/plain'
         });
         // Increment the number obtained from file.
         data = parseInt(data) + 1;
         // Write incremented number to file.
         fs.writeFile('test.txt', data);
         // End response with some nice message.
         response.end('This page was refreshed ' + data + ' times!');
      });
      
      