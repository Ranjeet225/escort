<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        html * {
        box-sizing: border-box;
        }

        p {
        margin: 0;
        }

        .upload {
        &__box {
            padding: 40px;
        }
        &__inputfile {
            width: .1px;
            height: .1px;
            opacity: 0;
            overflow: hidden;
            position: absolute;
            z-index: -1;
        }
        
        &__btn {
            display: inline-block;
            font-weight: 600;
            color: #fff;
            text-align: center;
            min-width: 116px;
            padding: 5px;
            transition: all .3s ease;
            cursor: pointer;
            border: 2px solid;
            background-color: #4045ba;
            border-color: #4045ba;
            border-radius: 10px;
            line-height: 26px;
            font-size: 14px;
            
            &:hover {
            background-color: unset;
            color: #4045ba;
            transition: all .3s ease;
            }
            
            &-box {
            margin-bottom: 10px;
            }
        }
        
        &__img {
            &-wrap {
            display: flex;
            flex-wrap: wrap;
            margin: 0 -10px;
            }
            
            &-box {
            width: 200px;
            padding: 0 10px;
            margin-bottom: 12px;
            }
            
            &-close {
                width: 24px;
                height: 24px;
                border-radius: 50%;
                background-color: rgba(0, 0, 0, 0.5);
                position: absolute;
                top: 10px;
                right: 10px;
                text-align: center;
                line-height: 24px;
                z-index: 1;
                cursor: pointer;

                &:after {
                content: '\2716';
                font-size: 14px;
                color: white;
                }
            }
        }
        }

        .img-bg {
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        position: relative;
        padding-bottom: 100%;
        }
    </style>
  </head>
  <body>
    <div class="upload__box">
        <div class="upload__btn-box">
          <label class="upload__btn">
            <p>Upload images</p>
            <input type="file" multiple="" data-max_length="20" class="upload__inputfile">
          </label>
        </div>
        <div class="upload__img-wrap"></div>
      </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script>
jQuery(document).ready(function () {
  ImgUpload();
});

function ImgUpload() {
  var imgWrap = "";
  var imgArray = [];

  $(".upload__inputfile").each(function () {
    $(this).on("change", function (e) {
      imgWrap = $(this).closest(".upload__box").find(".upload__img-wrap");
      var maxLength = $(this).attr("data-max_length");

      var files = e.target.files;
      var filesArr = Array.prototype.slice.call(files);
      var iterator = 0;
      filesArr.forEach(function (f, index) {
        if (!f.type.match("image.*")) {
          return;
        }

        if (imgArray.length > maxLength) {
          return false;
        } else {
          var len = 0;
          for (var i = 0; i < imgArray.length; i++) {
            if (imgArray[i] !== undefined) {
              len++;
            }
          }
          if (len > maxLength) {
            return false;
          } else {
            imgArray.push(f);

            var reader = new FileReader();
            reader.onload = function (e) {
              var html =
                "<div class='upload__img-box'><div style='background-image: url(" +
                e.target.result +
                ")' data-number='" +
                $(".upload__img-close").length +
                "' data-file='" +
                f.name +
                "' class='img-bg'><div class='upload__img-close'></div></div></div>";
              imgWrap.append(html);
              iterator++;
            };
            reader.readAsDataURL(f);
          }
        }
      });
    });
  });

  $("body").on("click", ".upload__img-close", function (e) {
    var file = $(this).parent().data("file");
    for (var i = 0; i < imgArray.length; i++) {
      if (imgArray[i].name === file) {
        imgArray.splice(i, 1);
        break;
      }
    }
    $(this).parent().parent().remove();
  });
}

  </script>
  </body>
</html>