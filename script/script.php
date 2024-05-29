<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
  integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
  integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

<!-- <script type="text/javascript">
  $(function () {
    $("#upload").on("click", function (e) {
      var lastFile = $(".file_upload:last").length;
      if (lastFile >= 0) {
        if (lastFile == 0 || $(".file_upload:last").val() != "") {
          var objFile = $("<input>", {
            "class": "file_upload",
            "type": "file",
            "multiple": "true",
            "name": "file_upload[]",
            "accept": "image/png, image/jpeg",
            "style": "display:none",
            change: function (e) {
              var files = this.files
              showThumbnail(files)
            }
          });
          $(this).before(objFile);
          $(".file_upload:last").show().click().hide();
        } else {
          $(".file_upload:last").show().click().hide();
        }
      }
      e.preventDefault();
    });

    function showThumbnail(files) {

      //    $("#thumbnail").html("");
      for (var i = 0; i < files.length; i++) {
        var file = files[i]
        var fileName = file.name;
        var imageType = /image.*/
        if (!file.type.match(imageType)) {
          //     console.log("Not an Image");
          continue;
        }
        var image = document.createElement("img");
        var wrapImg = document.createElement("div");
        var thumbnail = document.getElementById("thumbnail");
        wrapImg.className = 'removepic';
        wrapImg.setAttribute("data-file", fileName);
        image.file = file;
        wrapImg.appendChild(image);
        thumbnail.appendChild(wrapImg);

        var reader = new FileReader();
        reader.onload = (function (aImg) {
          return function (e) {
            aImg.src = e.target.result;
          };
        }(image))

        var ret = reader.readAsDataURL(file);
        var canvas = document.createElement("canvas");
        ctx = canvas.getContext("2d");
        image.onload = function () {
          ctx.drawImage(image, 100, 100)
        }
      } // end for loop

    } // end showThumbnail

    // ส่วนจัดการ การลบรูปที่ไม่ต้องการอัพโหลด จากการกดที่
    // หรือคลิกที่รูปที่ต้องการลบ 
    $(document.body).on("click", "div.removepic", function () {
      var removeFileName = $(this).data("file");
      var files = $("input.file_upload");
      var filesLength = files.length;
      for (var f = 0; f < filesLength; f++) {
        var fileLists = files[f].files;
        if (fileLists !== undefined) {
          for (var fl = 0; fl < fileLists.length; fl++) {
            if (fileLists[fl].name === removeFileName) {
              var removeImg = $("<input>", {
                "type": "hidden",
                "name": "remove_file[]",
                "value": removeFileName
              });
              $(files[f]).after(removeImg);
              break;
            }
          }
        };
      }
      $(this).remove();
    });


  });
</script> -->