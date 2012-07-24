<?
                require( "label.php" );
                dbConnect();
                if( !verifyAdmin() ) header( "Location: admin.php" );

                $cats = mysql_query( "SELECT * FROM member WHERE username_upline='$user'" ) or error( mysql_error() );
                DisplayHeader( "Member Area > ViewTree" );
                echo "<p align=\"center\" style=\"margin-top: 0; margin-bottom: 0\">\n";
                echo "<p align=\"center\"><font size=\"4\">  VIEW TREE (POHON JARINGAN) USERNAME = $user  </font></p>\n";
                echo "<p align=\"center\"><font size=\"1\">=================MAX. HINGGA 15 LEVEL=============== </font></p>\n";
                // level 1
                if( mysql_num_rows( $cats ) == 0 )
                     echo "<p align=\"center\"><font face=\"Verdana\" size=\"4\"> Maaf !!! Belum ada Jaringan</font></p>\n";
  		        else
                  {
			    while( $row = mysql_fetch_array( $cats ) )
			    {
                    echo "<pre style=\"margin-top: 0; margin-bottom: 0\"><font face=\"Verdana\" size=\"1\">|</font></pre> \n";
                    echo "<pre style=\"margin-top: 0; margin-bottom: 0\"><font face=\"Verdana\" size=\"1\">|-<b>level 1</b>--&gt;<b><font color=\"#000080\"><i> </i></font><i><font color=\"#000000\">{$row['nama']}</font></i></b> - <font color=\"#008080\">{$row['nomor_id']}</font> - {$row['username']}</font> - <font face=\"Verdana\" style=\"font-size: 8pt; font-style: italic\" color=\"#FF0000\">({$row['stat']})</font></pre> \n";

                    // level 2
				    $subcats = mysql_query( "SELECT * FROM member WHERE username_upline='{$row['username']}'" ) or error( mysql_error() );
                    $member = mysql_num_rows( $subcats );

                    while( $row =  mysql_fetch_array( $subcats ) )
				    {
                        echo "<pre style=\"margin-top: 0; margin-bottom: 0\"><font face=\"Verdana\" size=\"1\">|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|</font></pre> \n";
                        echo "<pre style=\"margin-top: 0; margin-bottom: 0\"><font face=\"Verdana\" size=\"1\">|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-<b>level 2</b>--&gt;<b><font color=\"#000080\"><i> </i></font><i><font color=\"#000000\">{$row['nama']}</font></i></b> - <font color=\"#008080\">{$row['nomor_id']}</font> - {$row['username']}</font> - <font face=\"Verdana\" style=\"font-size: 8pt; font-style: italic\" color=\"#FF0000\">({$row['stat']})</font></pre> \n";

                        // level 3
                        $subcats1 = mysql_query( "SELECT * FROM member WHERE username_upline='{$row['username']}'" ) or error( mysql_error() );
                        $member = mysql_num_rows( $subcats1 );

                        while( $row =  mysql_fetch_array( $subcats1 ) )
				        {
                            echo "<pre style=\"margin-top: 0; margin-bottom: 0\"><font face=\"Verdana\" size=\"1\">|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|</font></pre> \n";
                            echo "<pre style=\"margin-top: 0; margin-bottom: 0\"><font face=\"Verdana\" size=\"1\">|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-<b>level 3</b>--&gt;<b><font color=\"#000080\"><i> </i></font><i><font color=\"#000000\">{$row['nama']}</font></i></b> - <font color=\"#008080\">{$row['nomor_id']}</font> - {$row['username']}</font> - <font face=\"Verdana\" style=\"font-size: 8pt; font-style: italic\" color=\"#FF0000\">({$row['stat']})</font></pre> \n";

                            // level 4
                            $subcats2 = mysql_query( "SELECT * FROM member WHERE username_upline='{$row['username']}'" ) or error( mysql_error() );
                            $member = mysql_num_rows( $subcats2 );

                             while( $row =  mysql_fetch_array( $subcats2 ) )
	 	                     {
                                 echo "<pre style=\"margin-top: 0; margin-bottom: 0\"><font face=\"Verdana\" size=\"1\">|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|</font></pre> \n";
                                 echo "<pre style=\"margin-top: 0; margin-bottom: 0\"><font face=\"Verdana\" size=\"1\">|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-<b>level 4</b>--&gt;<b><font color=\"#000080\"><i> </i></font><i><font color=\"#000000\">{$row['nama']}</font></i></b> - <font color=\"#008080\">{$row['nomor_id']}</font> - {$row['username']}</font> - <font face=\"Verdana\" style=\"font-size: 8pt; font-style: italic\" color=\"#FF0000\">({$row['stat']})</font></pre> \n";

                                 // level 5
                                 $subcats3 = mysql_query( "SELECT * FROM member WHERE username_upline='{$row['username']}'" ) or error( mysql_error() );
                                 $member = mysql_num_rows( $subcats3 );

                                 while( $row =  mysql_fetch_array( $subcats3 ) )
			                     {
                                     echo "<pre style=\"margin-top: 0; margin-bottom: 0\"><font face=\"Verdana\" size=\"1\">|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|</font></pre> \n";
                                     echo "<pre style=\"margin-top: 0; margin-bottom: 0\"><font face=\"Verdana\" size=\"1\">|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-<b>level 5</b>--&gt;<b><font color=\"#000080\"><i> </i></font><i><font color=\"#000000\">{$row['nama']}</font></i></b> - <font color=\"#008080\">{$row['nomor_id']}</font> - {$row['username']}</font> - <font face=\"Verdana\" style=\"font-size: 8pt; font-style: italic\" color=\"#FF0000\">({$row['stat']})</font></pre> \n";

                                     // level 6
                                     $subcats4 = mysql_query( "SELECT * FROM member WHERE username_upline='{$row['username']}'" ) or error( mysql_error() );
                                     $member = mysql_num_rows( $subcats4 );

                                     while( $row =  mysql_fetch_array( $subcats4 ) )
			                         {
                                         echo "<pre style=\"margin-top: 0; margin-bottom: 0\"><font face=\"Verdana\" size=\"1\">|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|</font></pre> \n";
                                         echo "<pre style=\"margin-top: 0; margin-bottom: 0\"><font face=\"Verdana\" size=\"1\">|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-<b>level 6</b>--&gt;<b><font color=\"#000080\"><i> </i></font><i><font color=\"#000000\">{$row['nama']}</font></i></b> - <font color=\"#008080\">{$row['nomor_id']}</font> - {$row['username']}</font> - <font face=\"Verdana\" style=\"font-size: 8pt; font-style: italic\" color=\"#FF0000\">({$row['stat']})</font></pre> \n";

                                         // level 7
                                         $subcats5 = mysql_query( "SELECT * FROM member WHERE username_upline='{$row['username']}'" ) or error( mysql_error() );
                                         $member = mysql_num_rows( $subcats5 );

                                         while( $row =  mysql_fetch_array( $subcats5 ) )
			                             {
                                             echo "<pre style=\"margin-top: 0; margin-bottom: 0\"><font face=\"Verdana\" size=\"1\">|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|</font></pre> \n";
                                             echo "<pre style=\"margin-top: 0; margin-bottom: 0\"><font face=\"Verdana\" size=\"1\">|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-<b>level 7</b>--&gt;<b><font color=\"#000080\"><i> </i></font><i><font color=\"#000000\">{$row['nama']}</font></i></b> - <font color=\"#008080\">{$row['nomor_id']}</font> - {$row['username']}</font> - <font face=\"Verdana\" style=\"font-size: 8pt; font-style: italic\" color=\"#FF0000\">({$row['stat']})</font></pre> \n";

                                             // level 8
                                             $subcats6 = mysql_query( "SELECT * FROM member WHERE username_upline='{$row['username']}'" ) or error( mysql_error() );
                                             $member = mysql_num_rows( $subcats6 );

                                             while( $row =  mysql_fetch_array( $subcats6 ) )
			                                 {
                                                 echo "<pre style=\"margin-top: 0; margin-bottom: 0\"><font face=\"Verdana\" size=\"1\">|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|</font></pre> \n";
                                                 echo "<pre style=\"margin-top: 0; margin-bottom: 0\"><font face=\"Verdana\" size=\"1\">|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-<b>level 8</b>--&gt;<b><font color=\"#000080\"><i> </i></font><i><font color=\"#000000\">{$row['nama']}</font></i></b> - <font color=\"#008080\">{$row['nomor_id']}</font> - {$row['username']}</font> - <font face=\"Verdana\" style=\"font-size: 8pt; font-style: italic\" color=\"#FF0000\">({$row['stat']})</font></pre> \n";

                                                 // level 9
                                                 $subcats7 = mysql_query( "SELECT * FROM member WHERE username_upline='{$row['username']}'" ) or error( mysql_error() );
                                                 $member = mysql_num_rows( $subcats7 );

                                                 while( $row =  mysql_fetch_array( $subcats7 ) )
			                                     {
                                                     echo "<pre style=\"margin-top: 0; margin-bottom: 0\"><font face=\"Verdana\" size=\"1\">|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|</font></pre> \n";
                                                     echo "<pre style=\"margin-top: 0; margin-bottom: 0\"><font face=\"Verdana\" size=\"1\">|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-<b>level 9</b>--&gt;<b><font color=\"#000080\"><i> </i></font><i><font color=\"#000000\">{$row['nama']}</font></i></b> - <font color=\"#008080\">{$row['nomor_id']}</font> - {$row['username']}</font> - <font face=\"Verdana\" style=\"font-size: 8pt; font-style: italic\" color=\"#FF0000\">({$row['stat']})</font></pre> \n";

                                                     // level 10
                                                     $subcats8 = mysql_query( "SELECT * FROM member WHERE username_upline='{$row['username']}'" ) or error( mysql_error() );
                                                     $member = mysql_num_rows( $subcats8 );

                                                     while( $row =  mysql_fetch_array( $subcats8 ) )
			                                         {
                                                         echo "<pre style=\"margin-top: 0; margin-bottom: 0\"><font face=\"Verdana\" size=\"1\">|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|</font></pre> \n";
                                                         echo "<pre style=\"margin-top: 0; margin-bottom: 0\"><font face=\"Verdana\" size=\"1\">|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-<b>level 10</b>--&gt;<b><font color=\"#000080\"><i> </i></font><i><font color=\"#000000\">{$row['nama']}</font></i></b> - <font color=\"#008080\">{$row['nomor_id']}</font> - {$row['username']}</font> - <font face=\"Verdana\" style=\"font-size: 8pt; font-style: italic\" color=\"#FF0000\">({$row['stat']})</font></pre> \n";
                                                      
													     // level 11
                                                         $subcats9 = mysql_query( "SELECT * FROM member WHERE username_upline='{$row['username']}'" ) or error( mysql_error() );
                                                         $member = mysql_num_rows( $subcats9 );

                                                         while( $row =  mysql_fetch_array( $subcats9 ) )
			                                             {
                                                             echo "<pre style=\"margin-top: 0; margin-bottom: 0\"><font face=\"Verdana\" size=\"1\">|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|</font></pre> \n";
                                                             echo "<pre style=\"margin-top: 0; margin-bottom: 0\"><font face=\"Verdana\" size=\"1\">|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-<b>level 11</b>--&gt;<b><font color=\"#000080\"><i> </i></font><i><font color=\"#000000\">{$row['nama']}</font></i></b> - <font color=\"#008080\">{$row['nomor_id']}</font> - {$row['username']}</font> - <font face=\"Verdana\" style=\"font-size: 8pt; font-style: italic\" color=\"#FF0000\">({$row['stat']})</font></pre> \n";
                                                             
															 // level 12
                                                             $subcats10 = mysql_query( "SELECT * FROM member WHERE username_upline='{$row['username']}'" ) or error( mysql_error() );
                                                             $member = mysql_num_rows( $subcats10 );

                                                             while( $row =  mysql_fetch_array( $subcats10 ) )
			                                                 {
                                                                 echo "<pre style=\"margin-top: 0; margin-bottom: 0\"><font face=\"Verdana\" size=\"1\">|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|</font></pre> \n";
                                                                 echo "<pre style=\"margin-top: 0; margin-bottom: 0\"><font face=\"Verdana\" size=\"1\">|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-<b>level 12</b>--&gt;<b><font color=\"#000080\"><i> </i></font><i><font color=\"#000000\">{$row['nama']}</font></i></b> - <font color=\"#008080\">{$row['nomor_id']}</font> - {$row['username']}</font> - <font face=\"Verdana\" style=\"font-size: 8pt; font-style: italic\" color=\"#FF0000\">({$row['stat']})</font></pre> \n";
                                                                 
																 // level 13
                                                                 $subcats11 = mysql_query( "SELECT * FROM member WHERE username_upline='{$row['username']}'" ) or error( mysql_error() );
                                                                 $member = mysql_num_rows( $subcats11 );

                                                                 while( $row =  mysql_fetch_array( $subcats11 ) )
			                                                     {
                                                                     echo "<pre style=\"margin-top: 0; margin-bottom: 0\"><font face=\"Verdana\" size=\"1\">|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|</font></pre> \n";
                                                                     echo "<pre style=\"margin-top: 0; margin-bottom: 0\"><font face=\"Verdana\" size=\"1\">|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-<b>level 13</b>--&gt;<b><font color=\"#000080\"><i> </i></font><i><font color=\"#000000\">{$row['nama']}</font></i></b> - <font color=\"#008080\">{$row['nomor_id']}</font> - {$row['username']}</font> - <font face=\"Verdana\" style=\"font-size: 8pt; font-style: italic\" color=\"#FF0000\">({$row['stat']})</font></pre> \n";
                                                                     
																	 // level 14
                                                                     $subcats12 = mysql_query( "SELECT * FROM member WHERE username_upline='{$row['username']}'" ) or error( mysql_error() );
                                                                     $member = mysql_num_rows( $subcats12 );

                                                                     while( $row =  mysql_fetch_array( $subcats12 ) )
			                                                         {
                                                                         echo "<pre style=\"margin-top: 0; margin-bottom: 0\"><font face=\"Verdana\" size=\"1\">|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|</font></pre> \n";
                                                                         echo "<pre style=\"margin-top: 0; margin-bottom: 0\"><font face=\"Verdana\" size=\"1\">|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-<b>level 14</b>--&gt;<b><font color=\"#000080\"><i> </i></font><i><font color=\"#000000\">{$row['nama']}</font></i></b> - <font color=\"#008080\">{$row['nomor_id']}</font> - {$row['username']}</font> - <font face=\"Verdana\" style=\"font-size: 8pt; font-style: italic\" color=\"#FF0000\">({$row['stat']})</font></pre> \n";
                                                                        
																		 // level 15
                                                                         $subcats13 = mysql_query( "SELECT * FROM member WHERE username_upline='{$row['username']}'" ) or error( mysql_error() );
                                                                         $member = mysql_num_rows( $subcats13 );

                                                                         while( $row =  mysql_fetch_array( $subcats13 ) )
			                                                             {
                                                                             echo "<pre style=\"margin-top: 0; margin-bottom: 0\"><font face=\"Verdana\" size=\"1\">|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|</font></pre> \n";
                                                                             echo "<pre style=\"margin-top: 0; margin-bottom: 0\"><font face=\"Verdana\" size=\"1\">|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-<b>level 15</b>--&gt;<b><font color=\"#000080\"><i> </i></font><i><font color=\"#000000\">{$row['nama']}</font></i></b> - <font color=\"#008080\">{$row['nomor_id']}</font> - {$row['username']}</font> - <font face=\"Verdana\" style=\"font-size: 8pt; font-style: italic\" color=\"#FF0000\">({$row['stat']})</font></pre> \n";
                                                       
													                     }
													                 }
													             }
													         }
													     }
													  							  
													  }
                                                  }
                                              }
                                          }
                                      }
				                  }
    	                      }
                          }
                      }
   		          }
               }

       echo " <p align=\"center\">---------------------------------</p>";
       displayFooter();
  ?>
