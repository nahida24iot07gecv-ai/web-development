<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form method="post">
        <table width="100%" border="1" bgcolor="lightblue">
            <tr>
                <th colspan="2">
                    <h1> HTML/CSS Translator</h1>
                </th>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="btnrun" value="Run" style="width: 150px; padding:5px; margin:5px"/>
                </td>
            </tr>
            <tr>
                <td width="50%">
                      <textarea name="txtcode" style="width:99%; height:500px; font-size: 20px"> <?php
                          if(isset($_POST["btnrun"]))   {
                             echo $_POST["txtcode"];
                          }
                        ?></textarea>
                </td>
                <td style="background-color: white;"valign="top">
                     <?php
                        if(isset($_POST["btnrun"]))   {
                           echo $_POST["txtcode"];
                        }
                     ?>
                </td>
           </tr>
        </table>
    </form>   

</body>
</html>