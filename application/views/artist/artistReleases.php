
<!-- main container -->
<div class="content">

    <div class="container-fluid">

        <div id="pad-wrapper" style="margin-top: 0px;">
            <?
            echo "<input type='hidden' name='label_slug' id='label_slug' value='".$release[0]->artist_slug."' />";
            ?>
            <div class="table-products" style="margin-top: 60px;">
                <div class="row-fluid head">
                    <div class="span12">
                        <i class="icon-music icon-4x pull-left icon-muted" style="margin-right: 10px;" ></i><h4 style="font-size: 20px;">Artist: <br>  <b style="margin-left: 0px;"><? echo $release[0]->artist_name; ?></b></h4>
                    </div>
                    <div class="span8" style="margin-top: 20px;">
                        <!-- AddThis Button BEGIN -->
                        <div class="addthis_toolbox addthis_default_style addthis_16x16_style">
                            <a class="addthis_button_facebook"></a>
                            <a class="addthis_button_email"></a>
                            <a class="addthis_button_twitter"></a>
                            <a class="addthis_button_google_plusone_share"></a>
                            <a class="addthis_button_compact"></a><a class="addthis_counter addthis_bubble_style"></a>
                        </div>
                        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=undefined"></script>
                        <!-- AddThis Button END -->
                    </div>


                    <? if($this->ion_auth->is_admin()){
                        ?>
                        <div class="span6 pull-left" style="font-size: 16px;">
                            <?
                            echo "<a class='btn-glow' href='". base_url('edit/label/'.$release[0]->artist_slug)."' style='margin-left: 10px;¡><i class=¡icon-edit'></i>Edit (".$release[0]->artist_slug.")</a>";
                            echo '<span class="badge badge-success" style="margin-left: 20px;">Views: '.$release[0]->num_views.'</span>';

                            ?>
                        </div>
                        <?
                    }
                    ?>
                </div>


                <br>
                <div class="row-fluid">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="span1">
                                    Cover
                                </th>
                                <th class="span2">
                                    Artist
                                </th>
                                <th class="span3">
                                    <span class="line"></span>Release Title
                                </th>
                                <th class="span2">
                                    Label
                                </th>
                                <th class="span1">
                                    <span class="line"></span>Genre
                                </th>
                                <th class="span1">
                                    <span class="line"></span>Year
                                </th>
                                <th class="span2">
                                    <span class="line"></span>Status
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            <?  
                            foreach ($release as $row)
                            { 
                                ?>

                                <!-- row -->
                                <tr class="first">
                                    <td>
                                        <div class="img">
                                           <? if ($row->img_url==""){
                                            ?>
                                            <img src="<? echo base_url('img/nocover_small.jpg'); ?>" data-src="<? echo base_url('img/nocover_small.jpg'); ?>" alt="<? echo $row->artist_name." - ".$row->title; ?>"/>
                                            <?
                                        }else{
                                            ?>
                                            <img itemprop="thumbnailUrl" class="lazy" src="<? echo $row->img_url; ?>" data-src="<? echo $row->img_url; ?>" alt="<? echo $row->artist_name." - ".$row->title; ?>"/>
                                            <noscript>
                                                <img itemprop="thumbnailUrl" src="<? echo $row->img_url; ?>" alt="<? echo $row->artist_name." - ".$row->title; ?>"/>
                                            </noscript>
                                            <?
                                        }
                                        ?>
                                    </div>  
                                </td>
                                <td>
                                    <a href="<? echo base_url('artist/view/'.$row->artist_slug);?>" class="link" data-original-title="Search <? echo $row->artist_name; ?> Releases" ><? echo $row->artist_name; ?></a>
                                </td>
                                <td class="description">
                                  <a href="<? echo base_url('release/download/'.$row->slug);?>"><? echo $row->title; ?></a>
                              </td>
                              <td>
                                <a href="<? echo base_url('label/view/'.$row->label_slug);?>" class="link" data-original-title="Search more <? echo $row->label_name; ?> Releases" itemprop="publisher">
                                    <? echo $row->label_name; ?>
                                </a>
                            </td>
                            <td class="description">
                               <? echo $row->genre; ?>
                           </td>
                           <td class="description">
                               <? echo $row->date; ?>
                           </td>
                           <td>
                            <span class="label label-success">Active</span>
                            <ul class="actions">
                                <li style="border:none;">
                                  <a class="btn-flat default" href="<? echo base_url('release/download/'.$row->slug);?>" style="margin-top: -10px; font-size: 12px;">Download</a>
                              </li>
                          </ul>
                      </td>
                  </tr>
                  <? 
              }
              ?>

          </tbody>
      </table>
  </div>
  <div class="pagintaion" style="width: 170px; margin: auto auto;">
    <? if (isset($previous)){
        ?>
        <a class="btn-glow" style="font-size: 16px;" href="<? echo base_url('front/page/'.$previous);?>"> <i class="icon-chevron-left" style="font-size:12px;"></i> Previous </a>
        <?
    }
    if (isset($next)){
        ?>
        <a class="btn-glow" style="font-size: 16px; margin-left: 10px;" href="<? echo base_url('front/page/'.$next);?>"> Next <i class="icon-chevron-right" style="font-size:12px;"></i> </a>
        <?
    }
    ?>   
</div>

<div class="pagination">
  <ul>

    <?
    echo $links;
    ?>
</ul>
</div>
                    <!--
                        <li><a href="#">&#8249;</a></li>
                        <li><a class="active" href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">&#8250;</a></li>
                      </ul>
                    </div>
                -->
            </div>
            <!-- end table sample -->

        </div>
    </div>
</div>
