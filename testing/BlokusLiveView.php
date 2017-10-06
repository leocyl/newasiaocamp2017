<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script type="text/javascript">
       
/********** Live View of blokus table *************/
        
        //"https://sheets.googleapis.com/v4/spreadsheets/1cdHUgOYcsnIPPVRFhM_pf7fQdyxU2AhFKP2FmG04Ono/values/View!A1%3AAP42?key=AIzaSyDbncw5TqyuNcy0BfN8fpcpHfyUbzYxyXQ";

        var url1 = "https://sheets.googleapis.com/v4/spreadsheets/";
        var url2 = "/values/View!";
        var url3 = "%3A";
        var url4 = "?key=";
        
        var sheetid = "1cdHUgOYcsnIPPVRFhM_pf7fQdyxU2AhFKP2FmG04Ono"
        var secret = "AIzaSyDbncw5TqyuNcy0BfN8fpcpHfyUbzYxyXQ";

        var range1 = "A1";
        var range2 = "AP42";
        
        var jsonurl = url1 + sheetid + url2 + range1 + url3 + range2 + url4 + secret;

        var entries = [];
        var count = 0;

        $.getJSON( jsonurl , function(result){
          $.each(result["values"] , function(a, b){
            var tblRow = '<tr>';
            $.each(result["values"][count] , function(c , d){
              if(d == 'a' || d == 'A'){
                tblRow += '<td style="background-color: #9fc5e8 ; color: #9fc5e8">' + '' + "</td>";
              }
              else
                if(d == 'b' || d == 'B'){
                  tblRow += '<td style="background-color: #38761d ; color: #38761d">' + '' + "</td>";
                }
                else
                  if(d == 'c' || d == 'C'){
                    tblRow += '<td style="background-color: #1155cc ; color: #1155cc">' + '' + "</td>";
                  }
                  else
                    if(d == 'd' || d == 'D'){
                      tblRow += '<td style="background-color: #ead1dc ; color: #ead1dc">' + '' + "</td>";
                    }
                    else
                      if(d == '-'){
                        tblRow += '<td style="background-color: #C0C0C0 ; color: #C0C0C0">' + '' + "</td>";
                      }
                      else
                        if(d == '霧'){
                          tblRow += '<td style="background-color: #9fc5e8">' + d + "</td>";
                        }
                        else
                          if(d == '嘯'){
                            tblRow += '<td style="background-color: #38761d ; color : white">' + d + "</td>";
                          }
                          else
                            if(d == '蒼'){
                              tblRow += '<td style="background-color: #1155cc ; color : white">' + d + "</td>";
                            }
                            else
                              if(d == '楓'){
                                tblRow += '<td style="background-color: #ead1dc">' + d + "</td>";
                               }
                              else
                                //tblRow += '<td>' + d + "</td>";
                                tblRow += '<td><button class="button">___</button></td>';
            });
            tblRow += "</tr>"
            $("#blokusmap").append(tblRow);
            count += 1;
          })
        });
/********** End of Live View of blokus table *************/
</script>
  
<style type="text/css">
  table#blokus{
    border: 1px solid black;
    border-collapse: collapse;
    border-color: gray;
  }
  table#blokus tr, td {
    border: 1px solid black;
    border-collapse: collapse;
    min-width: 18px;
    height: 18px;
    font-size: 0.1em;
    text-align: center;
    border-color: #A9A9A9;
  }
  .button {
    background-color: #fff;
    border: none;
    color: white;
    text-align: center;
    text-decoration: none;
    font-size: 0.1em;
    margin: 0px 0px;
    cursor: pointer;
    padding: 0px 0px;
}
</style>

</head>
  <body>
    <div id="test">
      <table id="blokus" align="center">
        <tbody id="blokusmap">
        </tbody>
      </table>
    </div>
  </body>
</html>







