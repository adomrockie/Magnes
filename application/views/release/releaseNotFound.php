
<!-- main container -->
<div class="content">

    <div class="container-fluid">
        <!-- upper main stats -->



        <!-- end upper main stats -->

        <div id="pad-wrapper" style="margin-top: 0px;">


            <div class="table-products" style="margin-top: 60px;">
                <div class="row-fluid head">
                    <div class="span12">
                        <h4>The release you were searching was not found.<br><br>Similar from:   <b style="margin-left: 10px;"><? echo str_replace('-',' ',$search_name); ?></b></h4>
                    </div>
                        <!--
                        <div class="span12" style="font-size: 16px;">
                                All / Electronic / Rock
                        </div>
                    -->
                </div>
                <br>
                <div class="row-fluid">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="span3">
                                    Cover
                                </th>
                                <th class="span3">
                                    Artist
                                </th>
                                <th class="span3">
                                    <span class="line"></span>Release
                                </th>
                                <th class="span3">
                                    <span class="line"></span>Genre
                                </th>
                                <th class="span3">
                                    <span class="line"></span>Label
                                </th>
                                <th class="span3">
                                    <span class="line"></span>Year
                                </th>
                                <th class="span3">
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

                                    <a href=""><? echo $row->artist_name; ?></a>
                                </td>
                                <td class="description">
                                  <a href="<? echo base_url('release/download/'.$row->slug);?>"><? echo $row->title; ?></a>
                              </td>

                              <td class="description">
                                 <? echo $row->genre; ?>
                             </td>
                             <td>
                                    <a href="<? echo base_url('label/view/'.$row->label_slug);?>" class="link" data-original-title="Search more <? echo $row->label_name; ?> Releases" itemprop="publisher">
                                            <? echo $row->label_name; ?>
                                        </a>
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
                    <!--
                    <div class="pagination">
                      <ul>
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
