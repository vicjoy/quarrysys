
 <head>
                    <style type="text/css">
                    a {
                        text-decoration:none;
                        display: inline-block;
                        padding:8px 16px;
                    }
                    a:hover{
                        background-color: #dddddd;
                        color:black;
                    }
                    .previous{
                        background-color:#f1f1f1;
                        color:black;
                    }
                    .next{
                        background-color:#4caf50;
                        color:white;
                    }
                    .round{
                        border-radius:50%;
                    }
                    </style>
                </head>



<div class="modal-footer" style="text-align:center">
                        
                        <a href="qms_one.php" class="previous round btn btn-primary">&laquo;Previous</a>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> Close </button>
                        <input type="Submit" name="Submit1" class="btn btn-success" value="Next">
                        <INPUT TYPE = "Hidden" Name = "h1"  VALUE = <?PHP print $qID; ?>>
                    </form>
                </div>
            </body>
            </html>

<?php

        include('../container/footer.php');

?>