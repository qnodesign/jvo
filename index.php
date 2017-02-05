<?php

	echo 'hello world!';

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0"/>
	<title>Hír admin</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/froala_editor.min.css">
	<link rel="stylesheet" href="css/froala_style.min.css">
	<link rel="stylesheet" href="css/froala_editor.pkgd.min.css">
	<link rel="stylesheet" href="css/image.min.css">
	<link rel="stylesheet" href="css/image_manager.min.css">
</head>
<body>
<style>
      body {
          text-align: center;
      }

      div#editor {
          width: 81%;
          margin: auto;
          text-align: left;
      }
  </style>
<form>
	
	<label for="title">Cím</label>
	<input type="text" name="title" id="title" />

	<label for="subtitle">Alcím</label>
	<input type="text" name="subtitle" id="subtitle" />

	<label for="teaser">Ajánló</label>
	<textarea name="teaser" id="teaser"></textarea>

	<label for="teaser_image">Ajánló kép</label>
	<input type="file" name="teaser_image" id="teaser_image">

	<label for="category">Ajánló</label>
	<select>
		<?php
			for ($v=0;$v<5;$v++) {
				echo '<option>'.$v.'</option>';
			}
		?>
	</select>

	<label for="editor">Cikk</label>
	<div id="editor">
      <div id='edit' style="margin-top: 30px;">
        <h1>Language</h1>

        <p>The rich text editor's language can be easily changed using the <a href="https://www.froala.com/wysiwyg-editor/v2.0/docs/options#language" title="language option" target="_blank">language</a> option. You can see the complete list of available languages in <a href="https://www.froala.com/wysiwyg-editor/v2.0/languages" title="Languages" target="_blank">Languages</a>.</p>

        <img class="fr-fir fr-dii" src="../../img/photo1.jpg" alt="Old Clock" width="300"/>Lorem <strong>ipsum</strong> dolor sit amet, consectetur <strong>adipiscing <em>elit.</em> Donec</strong> facilisis diam in odio iaculis blandit. Nunc eu mauris sit amet purus <strong>viverra</strong><em> gravida</em> ut a dui.<br/>
        <ul><li>Vivamus nec rutrum augue, pharetra faucibus purus. Maecenas non orci sagittis, vehicula lorem et, dignissim nunc.</li> <li>Suspendisse suscipit, diam non varius facilisis, enim libero tincidunt magna, sit amet iaculis eros libero sit amet eros. Vestibulum a rhoncus felis.<ol><li>Nam lacus nulla, consequat ac lacus sit amet, accumsan pellentesque risus. Aenean viverra mi at urna mattis fermentum.</li> <li>Curabitur porta metus in tortor elementum, in semper nulla ullamcorper. Vestibulum mattis tempor tortor quis gravida. In rhoncus risus nibh. Nullam condimentum dapibus massa vel fringilla. Sed hendrerit sed est quis facilisis. Ut sit amet nibh sem. Pellentesque imperdiet mollis libero.</li></ol></li></ul>

        <table style="width: 100%;">
          <tr>
            <td style="width: 25%;"></td>
            <td style="width: 25%;"></td>
            <td style="width: 25%;"></td>
            <td style="width: 25%;"></td>
          </tr>
          <tr>
            <td style="width: 25%;"></td>
            <td style="width: 25%;"></td>
            <td style="width: 25%;"></td>
            <td style="width: 25%;"></td>
          </tr>
        </table>

        <a href="http://google.com" title="Aenean sed hendrerit">Aenean sed hendrerit</a> velit. Nullam eu mi dolor. Maecenas et erat risus. Nulla ac auctor diam, non aliquet ante. Fusce ullamcorper, ipsum id tempor lacinia, sem tellus malesuada libero, quis ornare sem massa in orci. Sed dictum dictum tristique. Proin eros turpis, ultricies eu sapien eget, ornare rutrum ipsum. Pellentesque eros nisl, ornare nec ipsum sed, aliquet sollicitudin erat. Nulla tincidunt porta <strong>vehicula.</strong><br/>
      </div>
    </div>

</form>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js"></script>

<script type="text/javascript" src="js/libs/froala/froala_editor.min.js" ></script>
<script type="text/javascript" src="js/libs/froala/image.min.js" ></script>
<script type="text/javascript" src="js/libs/froala/image_manager.min.js" ></script>
 <script type="text/javascript" src="js/libs/froala/hu.js"></script>
<script>
    $(function(){
      $.FroalaEditor.DefineIcon('imageInfo', {NAME: 'info'});
      $.FroalaEditor.RegisterCommand('imageInfo', {
        title: 'Info',
        focus: false,
        undo: false,
        refreshAfterCallback: false,
        callback: function () {
          var $img = this.image.get();
          alert($img.attr('src'));
        }
      });


      $('#edit').froalaEditor({
        language: 'hu',
        imageEditButtons: ['imageDisplay', 'imageAlign', 'imageInfo', 'imageRemove']
      })
    });
  </script>
</body>
</html>