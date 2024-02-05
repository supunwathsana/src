</div>
<footer>
        
        
          
      
          
          <p style="text-align: center;">
          <?php 
  $file_path = $_SERVER['PHP_SELF'];
  $filename = basename($file_path);
  $last_modify=filemtime($filename);
  $last_modify_date=date('F d, Y H:i:s', $last_modify);


  echo "The last modification of the file "  .$filename. "  was on ". $last_modify_date;
  ?>
  
        </p>
          

          
       
      
      
          
        
        

      </footer>
  </div>   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>