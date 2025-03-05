<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /> 

<!-- Inline CSS based on choices in "Settings" tab -->
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;}.bootstrap-iso .form-control:focus { border-color: #e966db;  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(233, 102, 219, 0.6); box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(233, 102, 219, 0.6);} .asteriskField{color: red;}.bootstrap-iso form .input-group-addon {color:#555555; background-color: #eadddd; border-radius: 4px; padding-left:12px}</style>

<!-- HTML Form (wrapped in a .bootstrap-iso div) -->
<div class="bootstrap-iso">
 <div class="container-fluid">
  <div class="row">
   <div class="col-md-6 col-sm-6 col-xs-12">
   <form action="output.php" method = "post">
     <div class="form-group ">
      <label class="control-label " for="nama">
       Name
      </label>
      <input class="form-control" id="nama" name="nama" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="email">
       Email
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" id="email" name="email" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label requiredField">
       Mata kuliah pilihan
       <span class="asteriskField">
        *
       </span>
      </label>
      <div class=" ">
       <div class="checkbox">
        <label class="checkbox">
         <input name="checkbox" type="checkbox" value="DDP"/>
         DDP
        </label>
       </div>
       <div class="checkbox">
        <label class="checkbox">
         <input name="checkbox" type="checkbox" value="Jaringan Komputer"/>
         Jaringan Komputer
        </label>
       </div>
       <div class="checkbox">
        <label class="checkbox">
         <input name="checkbox" type="checkbox" value="Bahasa Inggris"/>
         Bahasa Inggris
        </label>
       </div>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label " for="message">
       Message
      </label>
      <textarea class="form-control" cols="40" id="message" name="message" rows="10"></textarea>
     </div>
     <div class="form-group">
      <div>
       <button class="btn btn-primary " name="submit" type="submit">
        Submit
       </button>
      </div>
     </div>
    </form>
   </div>
  </div>
 </div>
</div>


</body>
</html>