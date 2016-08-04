<?php $this->load->view('header', array('num' => 2, 'title' => 'Teeth Profile')); ?>
		</div>
		</div>
			<div class="col-xs-12 columns">
		        <div class="element-container">
		        <?php foreach($info as $info):?>
		        	<input id="pid" type="hidden" value="<?php echo $info->patient_id;?>">
				  <legend><?php echo $info->firstname;?>'s Teeth Profile</legend>
				<?php endforeach;?>	
		          <div class="table-responsive">		          
		          	<table class="table teethprof-table table-condensed text-center" style="background-color:#fff; margin-bottom: 5px !important">
		          	     <tbody>
								<tr>
									<td class="tooth-elem">
										<div class="tooth">					
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){ ?>
												<?php if($teeth[$i]->toothno == '18' && $teeth[$i]->toothsurface == 'a'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="top test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/tophover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
													</div>
												<?php }else{ ?>
													<div class="top add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/top.png);cursor:pointer;"><input id="surface" type="hidden" value="a" /><input id="note" type="hidden" value="18"/>
													</div>
												<?php } ?>
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){ ?>
												<?php if($teeth[$i]->toothno == '18' && $teeth[$i]->toothsurface == 'b'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="left test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/lefthover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php }else{?>
													<div class="left add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/left.png);cursor: pointer;"><input id="surface" type="hidden" value="b" /><input id="note" type="hidden" value="18"/>
														
													</div>

												<?php } ?>
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '18' && $teeth[$i]->toothsurface == 'c'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="center test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/centerhover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="center add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/center.png);cursor: pointer;"><input id="surface" type="hidden" value="c" /><input id="note" type="hidden" value="18"/></div>
												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '18' && $teeth[$i]->toothsurface == 'd'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="right test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/righthover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="right add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/right.png);cursor: pointer;"><input id="surface" type="hidden" value="d" /><input id="note" type="hidden" value="18"/></div>
												<?php } ?>	
												
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '18' && $teeth[$i]->toothsurface == 'e'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="bottom test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottomhover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="bottom add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottom.png);cursor: pointer;"><input id="surface" type="hidden" value="e" /><input id="note" type="hidden" value="18"/></div>
												<?php } ?>	
													
											</div>
										</div>
									</td>
									<td class="tooth-elem">
										<div class="tooth">
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '17' && $teeth[$i]->toothsurface == 'a'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="top test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/tophover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>

												<?php } else {?>
													<div class="top add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/top.png);cursor:pointer;"><input id="surface" type="hidden" value="a" /><input id="note" type="hidden" value="17" /></div>

												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '17' && $teeth[$i]->toothsurface == 'b'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="left test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/lefthover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php }else{?>
													<div class="left add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/left.png);cursor: pointer;"><input id="surface" type="hidden" value="b" /><input id="note" type="hidden" value="17"/>
														
													</div>

												<?php } ?>
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '17' && $teeth[$i]->toothsurface == 'c'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="center test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/centerhover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="center add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/center.png);cursor: pointer;"><input id="surface" type="hidden" value="c" /><input id="note" type="hidden" value="17"/></div>
												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '17' && $teeth[$i]->toothsurface == 'd'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="right test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/righthover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="right add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/right.png);cursor: pointer;"><input id="surface" type="hidden" value="d" /><input id="note" type="hidden" value="17"/></div>
												<?php } ?>	
												
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '17' && $teeth[$i]->toothsurface == 'e'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="bottom test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottomhover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="bottom add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottom.png);cursor: pointer;"><input id="surface" type="hidden" value="e" /><input id="note" type="hidden" value="17"/></div>
												<?php } ?>	
													
											</div>
										</div>
									</td>
									<td class="tooth-elem">
										<div class="tooth">
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '16' && $teeth[$i]->toothsurface == 'a'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="top test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/tophover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>

												<?php } else {?>
													<div class="top add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/top.png);cursor:pointer;"><input id="surface" type="hidden" value="a" /><input id="note" type="hidden" value="16" /></div>

												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '16' && $teeth[$i]->toothsurface == 'b'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="left test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/lefthover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php }else{?>
													<div class="left add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/left.png);cursor: pointer;"><input id="surface" type="hidden" value="b" /><input id="note" type="hidden" value="16"/>
														
													</div>

												<?php } ?>
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '16' && $teeth[$i]->toothsurface == 'c'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="center test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/centerhover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="center add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/center.png);cursor: pointer;"><input id="surface" type="hidden" value="c" /><input id="note" type="hidden" value="16"/></div>
												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '16' && $teeth[$i]->toothsurface == 'd'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="right test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/righthover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="right add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/right.png);cursor: pointer;"><input id="surface" type="hidden" value="d" /><input id="note" type="hidden" value="16"/></div>
												<?php } ?>	
												
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '16' && $teeth[$i]->toothsurface == 'e'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="bottom test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottomhover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="bottom add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottom.png);cursor: pointer;"><input id="surface" type="hidden" value="e" /><input id="note" type="hidden" value="16"/></div>
												<?php } ?>	
													
											</div>
										</div>
									</td>
									<td class="tooth-elem">
										<div class="tooth">
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '15' && $teeth[$i]->toothsurface == 'a'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="top test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/tophover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>

												<?php } else {?>
													<div class="top add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/top.png);cursor:pointer;"><input id="surface" type="hidden" value="a" /><input id="note" type="hidden" value="15" /></div>

												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '15' && $teeth[$i]->toothsurface == 'b'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="left test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/lefthover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php }else{?>
													<div class="left add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/left.png);cursor: pointer;"><input id="surface" type="hidden" value="b" /><input id="note" type="hidden" value="15"/>
														
													</div>

												<?php } ?>
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '15' && $teeth[$i]->toothsurface == 'c'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="center test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/centerhover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="center add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/center.png);cursor: pointer;"><input id="surface" type="hidden" value="c" /><input id="note" type="hidden" value="15"/></div>
												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '15' && $teeth[$i]->toothsurface == 'd'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="right test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/righthover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="right add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/right.png);cursor: pointer;"><input id="surface" type="hidden" value="d" /><input id="note" type="hidden" value="15"/></div>
												<?php } ?>	
												
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '15' && $teeth[$i]->toothsurface == 'e'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="bottom test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottomhover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="bottom add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottom.png);cursor: pointer;"><input id="surface" type="hidden" value="e" /><input id="note" type="hidden" value="15"/></div>
												<?php } ?>	
													
											</div>
										</div>
									</td>
									<td class="tooth-elem">
										<div class="tooth">
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '14' && $teeth[$i]->toothsurface == 'a'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="top test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/tophover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>

												<?php } else {?>
													<div class="top add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/top.png);cursor:pointer;"><input id="surface" type="hidden" value="a" /><input id="note" type="hidden" value="14" /></div>

												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '14' && $teeth[$i]->toothsurface == 'b'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="left test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/lefthover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php }else{?>
													<div class="left add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/left.png);cursor: pointer;"><input id="surface" type="hidden" value="b" /><input id="note" type="hidden" value="14"/>
														
													</div>

												<?php } ?>
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '14' && $teeth[$i]->toothsurface == 'c'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="center test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/centerhover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="center add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/center.png);cursor: pointer;"><input id="surface" type="hidden" value="c" /><input id="note" type="hidden" value="14"/></div>
												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '14' && $teeth[$i]->toothsurface == 'd'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="right test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/righthover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="right add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/right.png);cursor: pointer;"><input id="surface" type="hidden" value="d" /><input id="note" type="hidden" value="14"/></div>
												<?php } ?>	
												
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '14' && $teeth[$i]->toothsurface == 'e'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="bottom test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottomhover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="bottom add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottom.png);cursor: pointer;"><input id="surface" type="hidden" value="e" /><input id="note" type="hidden" value="14"/></div>
												<?php } ?>	
													
											</div>
										</div>
									</td>
									<td class="tooth-elem">
										<div class="tooth">
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '13' && $teeth[$i]->toothsurface == 'a'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="top test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/tophover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>

												<?php } else {?>
													<div class="top add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/top.png);cursor:pointer;"><input id="surface" type="hidden" value="a" /><input id="note" type="hidden" value="13" /></div>

												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '13' && $teeth[$i]->toothsurface == 'b'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="left test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/lefthover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php }else{?>
													<div class="left add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/left.png);cursor: pointer;"><input id="surface" type="hidden" value="b" /><input id="note" type="hidden" value="13"/>
														
													</div>

												<?php } ?>
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '13' && $teeth[$i]->toothsurface == 'c'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="center test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/centerhover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="center add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/center.png);cursor: pointer;"><input id="surface" type="hidden" value="c" /><input id="note" type="hidden" value="13"/></div>
												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '13' && $teeth[$i]->toothsurface == 'd'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="right test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/righthover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="right add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/right.png);cursor: pointer;"><input id="surface" type="hidden" value="d" /><input id="note" type="hidden" value="13"/></div>
												<?php } ?>	
												
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '13' && $teeth[$i]->toothsurface == 'e'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="bottom test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottomhover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="bottom add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottom.png);cursor: pointer;"><input id="surface" type="hidden" value="e" /><input id="note" type="hidden" value="13"/></div>
												<?php } ?>	
													
											</div>
										</div>
									</td>
									<td class="tooth-elem">
										<div class="tooth">
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '12' && $teeth[$i]->toothsurface == 'a'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="top test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/tophover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>

												<?php } else {?>
													<div class="top add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/top.png);cursor:pointer;"><input id="surface" type="hidden" value="a" /><input id="note" type="hidden" value="12" /></div>

												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '12' && $teeth[$i]->toothsurface == 'b'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="left test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottomhover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php }else{?>
													<div class="left add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/left.png);cursor: pointer;"><input id="surface" type="hidden" value="b" /><input id="note" type="hidden" value="12"/>
														
													</div>

												<?php } ?>
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '12' && $teeth[$i]->toothsurface == 'c'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="center test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/centerhover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="center add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/center.png);cursor: pointer;"><input id="surface" type="hidden" value="c" /><input id="note" type="hidden" value="12"/></div>
												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '12' && $teeth[$i]->toothsurface == 'd'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="right test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/righthover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="right add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/right.png);cursor: pointer;"><input id="surface" type="hidden" value="d" /><input id="note" type="hidden" value="12"/></div>
												<?php } ?>	
												
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '12' && $teeth[$i]->toothsurface == 'e'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="bottom test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottomhover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="bottom add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottom.png);cursor: pointer;"><input id="surface" type="hidden" value="e" /><input id="note" type="hidden" value="12"/></div>
												<?php } ?>	
													
											</div>
										</div>
									</td>
									<td class="tooth-elem">
										<div class="tooth">
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '11' && $teeth[$i]->toothsurface == 'a'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="top test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/tophover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>

												<?php } else {?>
													<div class="top add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/top.png);cursor:pointer;"><input id="surface" type="hidden" value="a" /><input id="note" type="hidden" value="11" /></div>

												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '11' && $teeth[$i]->toothsurface == 'b'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="left test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/lefthover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php }else{?>
													<div class="left add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/left.png);cursor: pointer;"><input id="surface" type="hidden" value="b" /><input id="note" type="hidden" value="11"/>
														
													</div>

												<?php } ?>
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '11' && $teeth[$i]->toothsurface == 'c'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="center test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/centerhover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="center add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/center.png);cursor: pointer;"><input id="surface" type="hidden" value="c" /><input id="note" type="hidden" value="11"/></div>
												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '11' && $teeth[$i]->toothsurface == 'd'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="right test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/righthover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="right add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/right.png);cursor: pointer;"><input id="surface" type="hidden" value="d" /><input id="note" type="hidden" value="11"/></div>
												<?php } ?>	
												
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '11' && $teeth[$i]->toothsurface == 'e'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="bottom test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottomhover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="bottom add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottom.png);cursor: pointer;"><input id="surface" type="hidden" value="e" /><input id="note" type="hidden" value="11"/></div>
												<?php } ?>	
													
											</div>
										</div>
									</td>
									<td class="tooth-elem">
										<div class="tooth">
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '21' && $teeth[$i]->toothsurface == 'a'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="top test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/tophover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>

												<?php } else {?>
													<div class="top add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/top.png);cursor:pointer;"><input id="surface" type="hidden" value="a" /><input id="note" type="hidden" value="21" /></div>

												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '21' && $teeth[$i]->toothsurface == 'b'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="left test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/lefthover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php }else{?>
													<div class="left add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/left.png);cursor: pointer;"><input id="surface" type="hidden" value="b" /><input id="note" type="hidden" value="21"/>
														
													</div>

												<?php } ?>
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '21' && $teeth[$i]->toothsurface == 'c'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="center test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/centerhover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="center add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/center.png);cursor: pointer;"><input id="surface" type="hidden" value="c" /><input id="note" type="hidden" value="21"/></div>
												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '21' && $teeth[$i]->toothsurface == 'd'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="right test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/righthover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="right add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/right.png);cursor: pointer;"><input id="surface" type="hidden" value="d" /><input id="note" type="hidden" value="21"/></div>
												<?php } ?>	
												
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '21' && $teeth[$i]->toothsurface == 'e'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="bottom test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottomhover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="bottom add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottom.png);cursor: pointer;"><input id="surface" type="hidden" value="e" /><input id="note" type="hidden" value="21"/></div>
												<?php } ?>	
													
											</div>
										</div>
									</td>
									<td class="tooth-elem">
										<div class="tooth">
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '22' && $teeth[$i]->toothsurface == 'a'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="top test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/tophover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>

												<?php } else {?>
													<div class="top add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/top.png);cursor:pointer;"><input id="surface" type="hidden" value="a" /><input id="note" type="hidden" value="22" /></div>

												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '22' && $teeth[$i]->toothsurface == 'b'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="left test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/lefthover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php }else{?>
													<div class="left add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/left.png);cursor: pointer;"><input id="surface" type="hidden" value="b" /><input id="note" type="hidden" value="22"/>
														
													</div>

												<?php } ?>
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '22' && $teeth[$i]->toothsurface == 'c'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="center test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/centerhover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="center add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/center.png);cursor: pointer;"><input id="surface" type="hidden" value="c" /><input id="note" type="hidden" value="22"/></div>
												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '22' && $teeth[$i]->toothsurface == 'd'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="right test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/righthover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="right add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/right.png);cursor: pointer;"><input id="surface" type="hidden" value="d" /><input id="note" type="hidden" value="22"/></div>
												<?php } ?>	
												
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '22' && $teeth[$i]->toothsurface == 'e'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="bottom test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottomhover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="bottom add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottom.png);cursor: pointer;"><input id="surface" type="hidden" value="e" /><input id="note" type="hidden" value="22"/></div>
												<?php } ?>	
													
											</div>
										</div>
									</td>
									<td class="tooth-elem">
										<div class="tooth">
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '23' && $teeth[$i]->toothsurface == 'a'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="top test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/tophover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>

												<?php } else {?>
													<div class="top add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/top.png);cursor:pointer;"><input id="surface" type="hidden" value="a" /><input id="note" type="hidden" value="23" /></div>

												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '23' && $teeth[$i]->toothsurface == 'b'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="left test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/lefthover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php }else{?>
													<div class="left add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/left.png);cursor: pointer;"><input id="surface" type="hidden" value="b" /><input id="note" type="hidden" value="23"/>
														
													</div>

												<?php } ?>
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '23' && $teeth[$i]->toothsurface == 'c'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="center test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/centerhover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="center add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/center.png);cursor: pointer;"><input id="surface" type="hidden" value="c" /><input id="note" type="hidden" value="23"/></div>
												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '23' && $teeth[$i]->toothsurface == 'd'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="right test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/righthover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="right add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/right.png);cursor: pointer;"><input id="surface" type="hidden" value="d" /><input id="note" type="hidden" value="23"/></div>
												<?php } ?>	
												
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '23' && $teeth[$i]->toothsurface == 'e'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="bottom test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottomhover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="bottom add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottom.png);cursor: pointer;"><input id="surface" type="hidden" value="e" /><input id="note" type="hidden" value="23"/></div>
												<?php } ?>	
													
											</div>
										</div>
									</td>
									<td class="tooth-elem">
										<div class="tooth">
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '24' && $teeth[$i]->toothsurface == 'a'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="top test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/tophover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>

												<?php } else {?>
													<div class="top add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/top.png);cursor:pointer;"><input id="surface" type="hidden" value="a" /><input id="note" type="hidden" value="24" /></div>

												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '24' && $teeth[$i]->toothsurface == 'b'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="left test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/lefthover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php }else{?>
													<div class="left add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/left.png);cursor: pointer;"><input id="surface" type="hidden" value="b" /><input id="note" type="hidden" value="24"/>
														
													</div>

												<?php } ?>
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '24' && $teeth[$i]->toothsurface == 'c'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="center test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/centerhover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="center add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/center.png);cursor: pointer;"><input id="surface" type="hidden" value="c" /><input id="note" type="hidden" value="24"/></div>
												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '24' && $teeth[$i]->toothsurface == 'd'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="right test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/righthover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="right add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/right.png);cursor: pointer;"><input id="surface" type="hidden" value="d" /><input id="note" type="hidden" value="24"/></div>
												<?php } ?>	
												
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '24' && $teeth[$i]->toothsurface == 'e'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="bottom test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottomhover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="bottom add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottom.png);cursor: pointer;"><input id="surface" type="hidden" value="e" /><input id="note" type="hidden" value="24"/></div>
												<?php } ?>	
													
											</div>
										</div>
									</td>
									<td class="tooth-elem">
										<div class="tooth">
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '25' && $teeth[$i]->toothsurface == 'a'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="top test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/tophover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>

												<?php } else {?>
													<div class="top add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/top.png);cursor:pointer;"><input id="surface" type="hidden" value="a" /><input id="note" type="hidden" value="25" /></div>

												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '25' && $teeth[$i]->toothsurface == 'b'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="left test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/lefthover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php }else{?>
													<div class="left add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/left.png);cursor: pointer;"><input id="surface" type="hidden" value="b" /><input id="note" type="hidden" value="25"/>
														
													</div>

												<?php } ?>
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '25' && $teeth[$i]->toothsurface == 'c'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="center test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/centerhover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="center add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/center.png);cursor: pointer;"><input id="surface" type="hidden" value="c" /><input id="note" type="hidden" value="25"/></div>
												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '25' && $teeth[$i]->toothsurface == 'd'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="right test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/righthover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="right add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/right.png);cursor: pointer;"><input id="surface" type="hidden" value="d" /><input id="note" type="hidden" value="25"/></div>
												<?php } ?>	
												
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '25' && $teeth[$i]->toothsurface == 'e'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="bottom test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottomhover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="bottom add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottom.png);cursor: pointer;"><input id="surface" type="hidden" value="e" /><input id="note" type="hidden" value="25"/></div>
												<?php } ?>	
													
											</div>
										</div>
									</td>
									<td class="tooth-elem">
										<div class="tooth">
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '26' && $teeth[$i]->toothsurface == 'a'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="top test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/tophover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>

												<?php } else {?>
													<div class="top add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/top.png);cursor:pointer;"><input id="surface" type="hidden" value="a" /><input id="note" type="hidden" value="26" /></div>

												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '26' && $teeth[$i]->toothsurface == 'b'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="left test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/lefthover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php }else{?>
													<div class="left add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/left.png);cursor: pointer;"><input id="surface" type="hidden" value="b" /><input id="note" type="hidden" value="26"/>
														
													</div>

												<?php } ?>
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '26' && $teeth[$i]->toothsurface == 'c'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="center test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/centerhover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="center add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/center.png);cursor: pointer;"><input id="surface" type="hidden" value="c" /><input id="note" type="hidden" value="26"/></div>
												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '26' && $teeth[$i]->toothsurface == 'd'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="right test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/righthover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="right add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/right.png);cursor: pointer;"><input id="surface" type="hidden" value="d" /><input id="note" type="hidden" value="26"/></div>
												<?php } ?>	
												
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '26' && $teeth[$i]->toothsurface == 'e'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="bottom test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottomhover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="bottom add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottom.png);cursor: pointer;"><input id="surface" type="hidden" value="e" /><input id="note" type="hidden" value="26"/></div>
												<?php } ?>	
													
											</div>
										</div>
									</td>
									<td class="tooth-elem">
										<div class="tooth">
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '27' && $teeth[$i]->toothsurface == 'a'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="top test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/tophover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>

												<?php } else {?>
													<div class="top add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/top.png);cursor:pointer;"><input id="surface" type="hidden" value="a" /><input id="note" type="hidden" value="27" /></div>

												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '27' && $teeth[$i]->toothsurface == 'b'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="left test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/lefthover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php }else{?>
													<div class="left add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/left.png);cursor: pointer;"><input id="surface" type="hidden" value="b" /><input id="note" type="hidden" value="27"/>
														
													</div>

												<?php } ?>
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '27' && $teeth[$i]->toothsurface == 'c'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="center test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/centerhover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="center add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/center.png);cursor: pointer;"><input id="surface" type="hidden" value="c" /><input id="note" type="hidden" value="27"/></div>
												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '27' && $teeth[$i]->toothsurface == 'd'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="right test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/righthover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="right add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/right.png);cursor: pointer;"><input id="surface" type="hidden" value="d" /><input id="note" type="hidden" value="27"/></div>
												<?php } ?>	
												
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '27' && $teeth[$i]->toothsurface == 'e'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="bottom test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottomhover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="bottom add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottom.png);cursor: pointer;"><input id="surface" type="hidden" value="e" /><input id="note" type="hidden" value="27"/></div>
												<?php } ?>	
													
											</div>
										</div>
									</td>
									<td class="tooth-elem">
										<div class="tooth">
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '28' && $teeth[$i]->toothsurface == 'a'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="top test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/tophover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>

												<?php } else {?>
													<div class="top add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/top.png);cursor:pointer;"><input id="surface" type="hidden" value="a" /><input id="note" type="hidden" value="28" /></div>

												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '28' && $teeth[$i]->toothsurface == 'b'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="left test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/lefthover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php }else{?>
													<div class="left add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/left.png);cursor: pointer;"><input id="surface" type="hidden" value="b" /><input id="note" type="hidden" value="28"/>
														
													</div>

												<?php } ?>
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '28' && $teeth[$i]->toothsurface == 'c'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="center test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/centerhover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="center add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/center.png);cursor: pointer;"><input id="surface" type="hidden" value="c" /><input id="note" type="hidden" value="28"/></div>
												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '28' && $teeth[$i]->toothsurface == 'd'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="right test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/righthover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="right add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/right.png);cursor: pointer;"><input id="surface" type="hidden" value="d" /><input id="note" type="hidden" value="28"/></div>
												<?php } ?>	
												
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '28' && $teeth[$i]->toothsurface == 'e'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="bottom test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottomhover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="bottom add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottom.png);cursor: pointer;"><input id="surface" type="hidden" value="e" /><input id="note" type="hidden" value="28"/></div>
												<?php } ?>	
													
											</div>
										</div>
									</td>
								</tr>
								<tr class="text-center tooth-label">
									<td class="tooth-num">18</td>
									<td class="tooth-num">17</td>
									<td class="tooth-num">16</td>
									<td class="tooth-num">15</td>
									<td class="tooth-num">14</td>
									<td class="tooth-num">13</td>
									<td class="tooth-num">12</td>
									<td class="tooth-num">11</td>
									<td class="tooth-num">21</td>
									<td class="tooth-num">22</td>
									<td class="tooth-num">23</td>
									<td class="tooth-num">24</td>
									<td class="tooth-num">25</td>
									<td class="tooth-num">26</td>
									<td class="tooth-num">27</td>
									<td class="tooth-num">28</td>
								</tr>
								<tr>
									<td colspan="16"></td>
								</tr>
								<tr class="text-center tooth-label">
									<td class="tooth-num">48</td>
									<td class="tooth-num">47</td>
									<td class="tooth-num">46</td>
									<td class="tooth-num">45</td>
									<td class="tooth-num">44</td>
									<td class="tooth-num">43</td>
									<td class="tooth-num">42</td>
									<td class="tooth-num">41</td>
									<td class="tooth-num">31</td>
									<td class="tooth-num">32</td>
									<td class="tooth-num">33</td>
									<td class="tooth-num">34</td>
									<td class="tooth-num">35</td>
									<td class="tooth-num">36</td>
									<td class="tooth-num">37</td>
									<td class="tooth-num">38</td>
								</tr>
								<tr>
									<td class="tooth-elem">
										<div class="tooth">
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '48' && $teeth[$i]->toothsurface == 'a'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="top test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/tophover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>

												<?php } else {?>
													<div class="top add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/top.png);cursor:pointer;"><input id="surface" type="hidden" value="a" /><input id="note" type="hidden" value="48" /></div>

												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '48' && $teeth[$i]->toothsurface == 'b'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="left test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/lefthover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php }else{?>
													<div class="left add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/left.png);cursor: pointer;"><input id="surface" type="hidden" value="b" /><input id="note" type="hidden" value="48"/>
														
													</div>

												<?php } ?>
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '48' && $teeth[$i]->toothsurface == 'c'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="center test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/centerhover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="center add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/center.png);cursor: pointer;"><input id="surface" type="hidden" value="c" /><input id="note" type="hidden" value="48"/></div>
												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '48' && $teeth[$i]->toothsurface == 'd'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="right test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/righthover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="right add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/right.png);cursor: pointer;"><input id="surface" type="hidden" value="d" /><input id="note" type="hidden" value="48"/></div>
												<?php } ?>	
												
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '48' && $teeth[$i]->toothsurface == 'e'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="bottom test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottomhover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="bottom add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottom.png);cursor: pointer;"><input id="surface" type="hidden" value="e" /><input id="note" type="hidden" value="48"/></div>
												<?php } ?>	
													
											</div>
										</div>
									</td>
									<td class="tooth-elem">
										<div class="tooth">
												
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '47' && $teeth[$i]->toothsurface == 'a'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="top test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/tophover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php }else{?>
													<div class="top add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/top.png);cursor:pointer;"><input id="surface" type="hidden" value="a" /><input id="note" type="hidden" value="47"/>
														
													</div>

												<?php } ?>
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '47' && $teeth[$i]->toothsurface == 'b'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="left test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/lefthover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php }else{?>
													<div class="left add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/left.png);cursor: pointer;"><input id="surface" type="hidden" value="b" /><input id="note" type="hidden" value="47"/>
														
													</div>

												<?php } ?>
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '47' && $teeth[$i]->toothsurface == 'c'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="center test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/centerhover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="center add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/center.png);cursor: pointer;"><input id="surface" type="hidden" value="c" /><input id="note" type="hidden" value="47"/></div>
												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '47' && $teeth[$i]->toothsurface == 'd'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="right test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/righthover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="right add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/right.png);cursor: pointer;"><input id="surface" type="hidden" value="d" /><input id="note" type="hidden" value="47"/></div>
												<?php } ?>	
												
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '47' && $teeth[$i]->toothsurface == 'e'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="bottom test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottomhover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="bottom add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottom.png);cursor: pointer;"><input id="surface" type="hidden" value="e" /><input id="note" type="hidden" value="47"/></div>
												<?php } ?>	
													
											</div>
										</div>
									</td>
									<td class="tooth-elem">
										<div class="tooth">
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '46' && $teeth[$i]->toothsurface == 'a'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="top test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/tophover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>

												<?php } else {?>
													<div class="top add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/top.png);cursor:pointer;"><input id="surface" type="hidden" value="a" /><input id="note" type="hidden" value="46" /></div>

												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '46' && $teeth[$i]->toothsurface == 'b'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="left test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/lefthover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php }else{?>
													<div class="left add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/left.png);cursor: pointer;"><input id="surface" type="hidden" value="b" /><input id="note" type="hidden" value="46"/>
														
													</div>

												<?php } ?>
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '46' && $teeth[$i]->toothsurface == 'c'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="center test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/centerhover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="center add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/center.png);cursor: pointer;"><input id="surface" type="hidden" value="c" /><input id="note" type="hidden" value="46"/></div>
												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '46' && $teeth[$i]->toothsurface == 'd'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="right test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/righthover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="right add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/right.png);cursor: pointer;"><input id="surface" type="hidden" value="d" /><input id="note" type="hidden" value="46"/></div>
												<?php } ?>	
												
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '46' && $teeth[$i]->toothsurface == 'e'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="bottom test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottomhover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="bottom add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottom.png);cursor: pointer;"><input id="surface" type="hidden" value="e" /><input id="note" type="hidden" value="46"/></div>
												<?php } ?>	
													
											</div>
										</div>
									</td>
									<td class="tooth-elem">
										<div class="tooth">
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '45' && $teeth[$i]->toothsurface == 'a'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="top test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/tophover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>

												<?php } else {?>
													<div class="top add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/top.png);cursor:pointer;"><input id="surface" type="hidden" value="a" /><input id="note" type="hidden" value="45" /></div>

												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '45' && $teeth[$i]->toothsurface == 'b'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="left test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/lefthover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php }else{?>
													<div class="left add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/left.png);cursor: pointer;"><input id="surface" type="hidden" value="b" /><input id="note" type="hidden" value="45"/>
														
													</div>

												<?php } ?>
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '45' && $teeth[$i]->toothsurface == 'c'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="center test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/centerhover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="center add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/center.png);cursor: pointer;"><input id="surface" type="hidden" value="c" /><input id="note" type="hidden" value="45"/></div>
												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '45' && $teeth[$i]->toothsurface == 'd'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="right test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/righthover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="right add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/right.png);cursor: pointer;"><input id="surface" type="hidden" value="d" /><input id="note" type="hidden" value="45"/></div>
												<?php } ?>	
												
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '45' && $teeth[$i]->toothsurface == 'e'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="bottom test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottomhover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="bottom add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottom.png);cursor: pointer;"><input id="surface" type="hidden" value="e" /><input id="note" type="hidden" value="45"/></div>
												<?php } ?>	
													
											</div>
										</div>
									</td>
									<td class="tooth-elem">
										<div class="tooth">
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '44' && $teeth[$i]->toothsurface == 'a'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="top test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/tophover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>

												<?php } else {?>
													<div class="top add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/top.png);cursor:pointer;"><input id="surface" type="hidden" value="a" /><input id="note" type="hidden" value="44" /></div>

												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '44' && $teeth[$i]->toothsurface == 'b'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="left test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/lefthover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php }else{?>
													<div class="left add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/left.png);cursor: pointer;"><input id="surface" type="hidden" value="b" /><input id="note" type="hidden" value="44"/>
														
													</div>

												<?php } ?>
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '44' && $teeth[$i]->toothsurface == 'c'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="center test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/centerhover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="center add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/center.png);cursor: pointer;"><input id="surface" type="hidden" value="c" /><input id="note" type="hidden" value="44"/></div>
												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '44' && $teeth[$i]->toothsurface == 'd'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="right test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/righthover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="right add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/right.png);cursor: pointer;"><input id="surface" type="hidden" value="d" /><input id="note" type="hidden" value="44"/></div>
												<?php } ?>	
												
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '44' && $teeth[$i]->toothsurface == 'e'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="bottom test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottomhover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="bottom add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottom.png);cursor: pointer;"><input id="surface" type="hidden" value="e" /><input id="note" type="hidden" value="44"/></div>
												<?php } ?>	
													
											</div>
										</div>
									</td>
									<td class="tooth-elem">
										<div class="tooth">
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '43' && $teeth[$i]->toothsurface == 'a'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="top test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/tophover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>

												<?php } else {?>
													<div class="top add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/top.png);cursor:pointer;"><input id="surface" type="hidden" value="a" /><input id="note" type="hidden" value="43" /></div>

												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '43' && $teeth[$i]->toothsurface == 'b'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="left test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/lefthover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php }else{?>
													<div class="left add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/left.png);cursor: pointer;"><input id="surface" type="hidden" value="b" /><input id="note" type="hidden" value="43"/>
														
													</div>

												<?php } ?>
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '43' && $teeth[$i]->toothsurface == 'c'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="center test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/centerhover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="center add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/center.png);cursor: pointer;"><input id="surface" type="hidden" value="c" /><input id="note" type="hidden" value="43"/></div>
												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '43' && $teeth[$i]->toothsurface == 'd'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="right test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/righthover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="right add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/right.png);cursor: pointer;"><input id="surface" type="hidden" value="d" /><input id="note" type="hidden" value="43"/></div>
												<?php } ?>	
												
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '43' && $teeth[$i]->toothsurface == 'e'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="bottom test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottomhover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="bottom add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottom.png);cursor: pointer;"><input id="surface" type="hidden" value="e" /><input id="note" type="hidden" value="43"/></div>
												<?php } ?>	
													
											</div>
										</div>
									</td>
									<td class="tooth-elem">
										<div class="tooth">
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '42' && $teeth[$i]->toothsurface == 'a'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="top test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/tophover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>

												<?php } else {?>
													<div class="top add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/top.png);cursor:pointer;"><input id="surface" type="hidden" value="a" /><input id="note" type="hidden" value="42" /></div>

												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '42' && $teeth[$i]->toothsurface == 'b'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="left test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottomhover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php }else{?>
													<div class="left add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/left.png);cursor: pointer;"><input id="surface" type="hidden" value="b" /><input id="note" type="hidden" value="42"/>
														
													</div>

												<?php } ?>
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '42' && $teeth[$i]->toothsurface == 'c'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="center test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/centerhover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="center add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/center.png);cursor: pointer;"><input id="surface" type="hidden" value="c" /><input id="note" type="hidden" value="42"/></div>
												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '42' && $teeth[$i]->toothsurface == 'd'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="right test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/righthover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="right add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/right.png);cursor: pointer;"><input id="surface" type="hidden" value="d" /><input id="note" type="hidden" value="42"/></div>
												<?php } ?>	
												
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '42' && $teeth[$i]->toothsurface == 'e'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="bottom test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottomhover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="bottom add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottom.png);cursor: pointer;"><input id="surface" type="hidden" value="e" /><input id="note" type="hidden" value="42"/></div>
												<?php } ?>	
													
											</div>
										</div>
									</td>
									<td class="tooth-elem">
										<div class="tooth">
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '41' && $teeth[$i]->toothsurface == 'a'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="top test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/tophover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>

												<?php } else {?>
													<div class="top add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/top.png);cursor:pointer;"><input id="surface" type="hidden" value="a" /><input id="note" type="hidden" value="41" /></div>

												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '41' && $teeth[$i]->toothsurface == 'b'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="left test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/lefthover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php }else{?>
													<div class="left add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/left.png);cursor: pointer;"><input id="surface" type="hidden" value="b" /><input id="note" type="hidden" value="41"/>
														
													</div>

												<?php } ?>
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '41' && $teeth[$i]->toothsurface == 'c'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="center test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/centerhover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="center add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/center.png);cursor: pointer;"><input id="surface" type="hidden" value="c" /><input id="note" type="hidden" value="41"/></div>
												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '41' && $teeth[$i]->toothsurface == 'd'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="right test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/righthover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="right add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/right.png);cursor: pointer;"><input id="surface" type="hidden" value="d" /><input id="note" type="hidden" value="41"/></div>
												<?php } ?>	
												
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '41' && $teeth[$i]->toothsurface == 'e'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="bottom test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottomhover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="bottom add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottom.png);cursor: pointer;"><input id="surface" type="hidden" value="e" /><input id="note" type="hidden" value="41"/></div>
												<?php } ?>	
													
											</div>
										</div>
									</td>
									<td class="tooth-elem">
										<div class="tooth">
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '31' && $teeth[$i]->toothsurface == 'a'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="top test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/tophover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>

												<?php } else {?>
													<div class="top add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/top.png);cursor:pointer;"><input id="surface" type="hidden" value="a" /><input id="note" type="hidden" value="31" /></div>

												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '31' && $teeth[$i]->toothsurface == 'b'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="left test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/lefthover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php }else{?>
													<div class="left add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/left.png);cursor: pointer;"><input id="surface" type="hidden" value="b" /><input id="note" type="hidden" value="31"/>
														
													</div>

												<?php } ?>
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '31' && $teeth[$i]->toothsurface == 'c'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="center test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/centerhover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="center add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/center.png);cursor: pointer;"><input id="surface" type="hidden" value="c" /><input id="note" type="hidden" value="31"/></div>
												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '31' && $teeth[$i]->toothsurface == 'd'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="right test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/righthover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="right add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/right.png);cursor: pointer;"><input id="surface" type="hidden" value="d" /><input id="note" type="hidden" value="31"/></div>
												<?php } ?>	
												
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '31' && $teeth[$i]->toothsurface == 'e'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="bottom test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottomhover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="bottom add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottom.png);cursor: pointer;"><input id="surface" type="hidden" value="e" /><input id="note" type="hidden" value="31"/></div>
												<?php } ?>	
													
											</div>
										</div>
									</td>
									<td class="tooth-elem">
										<div class="tooth">
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '32' && $teeth[$i]->toothsurface == 'a'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="top test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/tophover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>

												<?php } else {?>
													<div class="top add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/top.png);cursor:pointer;"><input id="surface" type="hidden" value="a" /><input id="note" type="hidden" value="32" /></div>

												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '32' && $teeth[$i]->toothsurface == 'b'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="left test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/lefthover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php }else{?>
													<div class="left add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/left.png);cursor: pointer;"><input id="surface" type="hidden" value="b" /><input id="note" type="hidden" value="32"/>
														
													</div>

												<?php } ?>
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '32' && $teeth[$i]->toothsurface == 'c'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="center test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/centerhover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="center add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/center.png);cursor: pointer;"><input id="surface" type="hidden" value="c" /><input id="note" type="hidden" value="32"/></div>
												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '32' && $teeth[$i]->toothsurface == 'd'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="right test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/righthover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="right add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/right.png);cursor: pointer;"><input id="surface" type="hidden" value="d" /><input id="note" type="hidden" value="32"/></div>
												<?php } ?>	
												
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '32' && $teeth[$i]->toothsurface == 'e'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="bottom test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottomhover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="bottom add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottom.png);cursor: pointer;"><input id="surface" type="hidden" value="e" /><input id="note" type="hidden" value="32"/></div>
												<?php } ?>	
													
											</div>
										</div>
									</td>
									<td class="tooth-elem">
										<div class="tooth">
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '33' && $teeth[$i]->toothsurface == 'a'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="top test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/tophover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>

												<?php } else {?>
													<div class="top add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/top.png);cursor:pointer;"><input id="surface" type="hidden" value="a" /><input id="note" type="hidden" value="33" /></div>

												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '33' && $teeth[$i]->toothsurface == 'b'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="left test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/lefthover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php }else{?>
													<div class="left add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/left.png);cursor: pointer;"><input id="surface" type="hidden" value="b" /><input id="note" type="hidden" value="33"/>
														
													</div>

												<?php } ?>
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '33' && $teeth[$i]->toothsurface == 'c'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="center test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/centerhover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="center add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/center.png);cursor: pointer;"><input id="surface" type="hidden" value="c" /><input id="note" type="hidden" value="33"/></div>
												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '33' && $teeth[$i]->toothsurface == 'd'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="right test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/righthover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="right add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/right.png);cursor: pointer;"><input id="surface" type="hidden" value="d" /><input id="note" type="hidden" value="33"/></div>
												<?php } ?>	
												
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '33' && $teeth[$i]->toothsurface == 'e'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="bottom test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottomhover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="bottom add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottom.png);cursor: pointer;"><input id="surface" type="hidden" value="e" /><input id="note" type="hidden" value="33"/></div>
												<?php } ?>	
													
											</div>
										</div>
									</td>
									<td class="tooth-elem">
										<div class="tooth">
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '34' && $teeth[$i]->toothsurface == 'a'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="top test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/tophover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>

												<?php } else {?>
													<div class="top add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/top.png);cursor:pointer;"><input id="surface" type="hidden" value="a" /><input id="note" type="hidden" value="34" /></div>

												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '34' && $teeth[$i]->toothsurface == 'b'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="left test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/lefthover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php }else{?>
													<div class="left add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/left.png);cursor: pointer;"><input id="surface" type="hidden" value="b" /><input id="note" type="hidden" value="34"/>
														
													</div>

												<?php } ?>
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '34' && $teeth[$i]->toothsurface == 'c'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="center test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/centerhover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="center add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/center.png);cursor: pointer;"><input id="surface" type="hidden" value="c" /><input id="note" type="hidden" value="34"/></div>
												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '34' && $teeth[$i]->toothsurface == 'd'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="right test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/righthover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="right add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/right.png);cursor: pointer;"><input id="surface" type="hidden" value="d" /><input id="note" type="hidden" value="34"/></div>
												<?php } ?>	
												
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '34' && $teeth[$i]->toothsurface == 'e'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="bottom test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottomhover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="bottom add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottom.png);cursor: pointer;"><input id="surface" type="hidden" value="e" /><input id="note" type="hidden" value="34"/></div>
												<?php } ?>	
													
											</div>
										</div>
									</td>
									<td class="tooth-elem">
										<div class="tooth">
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '35' && $teeth[$i]->toothsurface == 'a'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="top test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/tophover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>

												<?php } else {?>
													<div class="top add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/top.png);cursor:pointer;"><input id="surface" type="hidden" value="a" /><input id="note" type="hidden" value="35" /></div>

												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '35' && $teeth[$i]->toothsurface == 'b'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="left test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/lefthover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php }else{?>
													<div class="left add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/left.png);cursor: pointer;"><input id="surface" type="hidden" value="b" /><input id="note" type="hidden" value="35"/>
														
													</div>

												<?php } ?>
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '35' && $teeth[$i]->toothsurface == 'c'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="center test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/centerhover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="center add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/center.png);cursor: pointer;"><input id="surface" type="hidden" value="c" /><input id="note" type="hidden" value="35"/></div>
												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '35' && $teeth[$i]->toothsurface == 'd'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="right test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/righthover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="right add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/right.png);cursor: pointer;"><input id="surface" type="hidden" value="d" /><input id="note" type="hidden" value="35"/></div>
												<?php } ?>	
												
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '35' && $teeth[$i]->toothsurface == 'e'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="bottom test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottomhover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="bottom add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottom.png);cursor: pointer;"><input id="surface" type="hidden" value="e" /><input id="note" type="hidden" value="35"/></div>
												<?php } ?>	
													
											</div>
										</div>
									</td>
									<td class="tooth-elem">
										<div class="tooth">
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '36' && $teeth[$i]->toothsurface == 'a'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="top test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/tophover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>

												<?php } else {?>
													<div class="top add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/top.png);cursor:pointer;"><input id="surface" type="hidden" value="a" /><input id="note" type="hidden" value="36" /></div>

												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '36' && $teeth[$i]->toothsurface == 'b'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="left test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/lefthover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php }else{?>
													<div class="left add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/left.png);cursor: pointer;"><input id="surface" type="hidden" value="b" /><input id="note" type="hidden" value="36"/>
														
													</div>

												<?php } ?>
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '36' && $teeth[$i]->toothsurface == 'c'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="center test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/centerhover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="center add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/center.png);cursor: pointer;"><input id="surface" type="hidden" value="c" /><input id="note" type="hidden" value="36"/></div>
												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '36' && $teeth[$i]->toothsurface == 'd'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="right test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/righthover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="right add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/right.png);cursor: pointer;"><input id="surface" type="hidden" value="d" /><input id="note" type="hidden" value="36"/></div>
												<?php } ?>	
												
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '36' && $teeth[$i]->toothsurface == 'e'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="bottom test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottomhover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="bottom add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottom.png);cursor: pointer;"><input id="surface" type="hidden" value="e" /><input id="note" type="hidden" value="36"/></div>
												<?php } ?>	
													
											</div>
										</div>
									</td>
									<td class="tooth-elem">
										<div class="tooth">
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '37' && $teeth[$i]->toothsurface == 'a'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="top test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/tophover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>

												<?php } else {?>
													<div class="top add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/top.png);cursor:pointer;"><input id="surface" type="hidden" value="a" /><input id="note" type="hidden" value="37" /></div>

												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '37' && $teeth[$i]->toothsurface == 'b'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="left test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/lefthover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php }else{?>
													<div class="left add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/left.png);cursor: pointer;"><input id="surface" type="hidden" value="b" /><input id="note" type="hidden" value="37"/>
														
													</div>

												<?php } ?>
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '37' && $teeth[$i]->toothsurface == 'c'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="center test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/centerhover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="center add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/center.png);cursor: pointer;"><input id="surface" type="hidden" value="c" /><input id="note" type="hidden" value="37"/></div>
												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '37' && $teeth[$i]->toothsurface == 'd'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="right test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/righthover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="right add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/right.png);cursor: pointer;"><input id="surface" type="hidden" value="d" /><input id="note" type="hidden" value="37"/></div>
												<?php } ?>	
												
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '37' && $teeth[$i]->toothsurface == 'e'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="bottom test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottomhover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="bottom add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottom.png);cursor: pointer;"><input id="surface" type="hidden" value="e" /><input id="note" type="hidden" value="37"/></div>
												<?php } ?>	
													
											</div>
										</div>
									</td>
									<td class="tooth-elem">
										<div class="tooth">
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '38' && $teeth[$i]->toothsurface == 'a'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="top test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/tophover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>

												<?php } else {?>
													<div class="top add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/top.png);cursor:pointer;"><input id="surface" type="hidden" value="a" /><input id="note" type="hidden" value="38" /></div>

												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '38' && $teeth[$i]->toothsurface == 'b'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="left test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/lefthover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php }else{?>
													<div class="left add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/left.png);cursor: pointer;"><input id="surface" type="hidden" value="b" /><input id="note" type="hidden" value="38"/>
														
													</div>

												<?php } ?>
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '38' && $teeth[$i]->toothsurface == 'c'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="center test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/centerhover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="center add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/center.png);cursor: pointer;"><input id="surface" type="hidden" value="c" /><input id="note" type="hidden" value="38"/></div>
												<?php } ?>	
													
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '38' && $teeth[$i]->toothsurface == 'd'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="right test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/righthover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="right add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/right.png);cursor: pointer;"><input id="surface" type="hidden" value="d" /><input id="note" type="hidden" value="38"/></div>
												<?php } ?>	
												
											
											
												<?php $k=0;$j=0;for($i=0;$i<count($teeth);$i++){?>
												<?php if($teeth[$i]->toothno == '38' && $teeth[$i]->toothsurface == 'e'){$k=$i;$j++;}}?>
												<?php if($j!=0){?>
													<div class="bottom test" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottomhover.png);cursor: pointer;">
														<input id="note" type="hidden" value="<?php echo $teeth[$k]->note;?>"/>
														<input id="tid" type="hidden" value="<?php echo $teeth[$k]->id;?>"/>
														<input id="surface" type="hidden" value="<?php echo $teeth[$k]->toothsurface;?>"/>
														<input id="tno" type="hidden" value="<?php echo $teeth[$k]->toothno;?>"/>
													</div>
												<?php } else { ?>
													<div class="bottom add" style="background-image: url(<?php echo base_url();?>assets/img/teethprofile/bottom.png);cursor: pointer;"><input id="surface" type="hidden" value="e" /><input id="note" type="hidden" value="38"/></div>
												<?php } ?>	
													
											</div>
										</div>
									</td>
								</tr>
							</tbody>
		          	 </table>	
				</div>
				<hr />
				<a href="<?php echo base_url();?>patient/view_patient_profile/<?php echo $info->patient_id;?>">
		          	 <button type="button" class="btn btn-warning">
		          	 	<span class="glyphicon glyphicon-arrow-left"></span> Back to Profile
		          	 </button> 
		        </a>		
			</div>
		          <!-- MODAL FOR ADDING TOOTH FINDINGS -->									
				      <div class="modal fade" id="add-finding" tabindex="-1" role="dialog" aria-labelledby="Add a tooth finding" aria-hidden="true">
						  <div class="modal-dialog">
						    <div class="modal-content">
							  <form method="post" role="form" action="<?php echo base_url();?>patient/add_teeth_info">
							      <div class="modal-header">
							      	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							        <h4 class="modal-title">Findings for the selected tooth surface</h4>
							      </div>

							      <div class="modal-body" style="width:80%; margin: 0 auto">
							      			<input id="apid" name="pid" type="hidden" value=""/>
							      			<input id="tono" name="no" type="hidden" value=""/>
							      			<input id="tsu" name="surface" type="hidden" value=""/>
							        		<textarea class="form-control" name="note" id="afindings" cols="30" rows="3" required></textarea>
							      </div>
							      <div class="modal-footer">
							        <button id="submit-findings" type="submit" class="btn btn-primary">Add Findings
							        </button>
							      </div>
						      </form>
						    </div><!-- /.modal-content -->
						  </div><!-- /.modal-dialog -->
					  </div><!-- /.modal -->

					<!-- For existing -->
					  <div class="modal fade" id="update-findings" tabindex="-1" role="dialog" aria-labelledby="Add a tooth finding" aria-hidden="true">
						  <div class="modal-dialog">
						    <div class="modal-content">
							  <!-- <form method="post" role="form" action="<?php echo base_url();?>cadmin/update_teeth_info"> -->
							      <div class="modal-header">
							      	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							        <h4 class="modal-title">Findings for the selected tooth surface</h4>
							      </div>

							      <div class="modal-body" style="width:90%; margin:0 auto">
							      		<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
						                    <thead>
						                        <tr>
						                            <th class="text-center" width="50%">Findings</th>
						                            <th class="text-center" width="50%">Date Added</th>
						                        </tr>
						                    </thead>
						                                 
						                    <tbody id="trid">
						                    </tbody>
						                </table>
							      			<!-- <input id="upid" name="pid" type="hidden" value=""/>
							      			<input id="utid" name="tid" type="hidden" value=""/>
							        		<textarea class="form-control" name="note" id="ufindings" cols="30" rows="3" required></textarea> -->
							      </div>
							      <div class="modal-footer">
							        <button class="addnew btn btn-success">
							        	<span class="glyphicon glyphicon-plus"></span> Add new findings
							        	<input id="aapid" name="pid" type="hidden" value=""/>
						      			<input id="ttno" name="no" type="hidden" value=""/>
						      			<input id="ttsu" name="surface" type="hidden" value=""/>
						      		</button>
							        <!-- <button id="submit-findings" type="submit" class="btn btn-primary">Submit</button> -->
							      </div>
						     <!--  </form> -->
						    </div><!-- /.modal-content -->
						  </div><!-- /.modal-dialog -->
					  </div><!-- /.modal -->
				  <!-- END OF MODAL FOR ADDING TOOTH FINDINGS -->

<?php $this->load->view('footer'); ?>
<script type="text/javascript">
$(document).ready(function(){
					
				$(".test").click(function(){
					var note=$(this).find("input[id=note]").val();
					var toothno=$(this).find("input[id=tno]").val();
					var toothsurface=$(this).find("input[id=surface]").val();
					var pid=$('#pid').val();
					var tid=$(this).find("input[id=tid]").val();
					$('#aapid').val(pid);
					$('#ttno').val(toothno);
					$('#ttsu').val(toothsurface);
					$("#update-findings").modal("toggle");
					$.ajax({
				          url:"<?php echo base_url(); ?>patient/teeth_findings",    
				          data: {pid: $('#pid').val(),tno: $(this).find("input[id=tno]").val(),surface: $(this).find("input[id=surface]").val()},
				          type: "POST",
				          success: function(data){
				              
				              $("#trid").html(data);
				          }
				     }); 
				});

				$(".add").click(function(){
					var surface=$(this).find("input[id=surface]").val();
					var no=$(this).find("input[id=note]").val();
					var pid=$('#pid').val();
					$('#apid').val(pid);
					$('#tono').val(no);
					$('#tsu').val(surface);
					$("#add-finding").modal("toggle");
				});

				$(".addnew").click(function(){
					$('#apid').val($(this).find("input[id=aapid]").val());
					$('#tono').val($(this).find("input[id=ttno]").val());
					$('#tsu').val($(this).find("input[id=ttsu]").val());
					$("#update-findings").modal("hide");
					$("#add-finding").modal("toggle");
				});
});
</script>