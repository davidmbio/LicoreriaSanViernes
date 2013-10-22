<?php

require '../templates/tamplates.php';


$temp= new Template('../layout/layout.tpl');
$temp->set('title','Productos');
$temp->set('header', 'Lista de Productos');
$temp->set('content','
    <div style="background-color:white;">
    
          <ul id="myTab" class="nav nav-tabs">
              <li class="active"><a href="#licor1" data-toggle="tab">Torres</a></li>
              <li><a href="#licor2" data-toggle="tab">Jose Cuervo</a></li>
              <li><a href="#licor3" data-toggle="tab">Bacardi</a></li>          
          </ul>
          <div id="myTabContent" class="tab-content">
              <div class="tab-pane fade in active" id="licor1">
                 <div class="row-fluid">
                    <ul class="thumbnails">
                        <li class="span4">
                          <div class="thumbnail">
                              <img data-src="holder.js/300x200" src="../../../web/img/productos/1.jpg">
                            <div class="caption">
                              <h3>Torres 10</h3>
                              <div class="btn-group">
                                  <a class="btn btn-primary" href="#"><i class="icon-star icon-white"></i> Acci&oacute;n</a>
                                    <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                      <li><a href="#"><i class="icon-shopping-cart"></i>Agrega</a></li>
                                      <li><a href="#"><i class="icon-eye-open"></i>Leer mas..</a></li>
                                    </ul>
                                  </div>
                            </div>
                          </div>
                        </li>
                        <li class="span4">
                          <div class="thumbnail">
                              <img data-src="holder.js/250x200" src="../../../web/img/productos/1.jpg">
                            <div class="caption">
                              <h3>Torre 11</h3>
                              <div class="btn-group">
                                  <a class="btn btn-primary" href="#"><i class="icon-star icon-white"></i> Acci&oacute;n</a>
                                    <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                      <li><a href="#"><i class="icon-shopping-cart"></i>Agrega</a></li>
                                      <li><a href="#"><i class="icon-eye-open"></i>Leer mas..</a></li>
                                    </ul>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="span4">
                        <div class="thumbnail">
                            <img data-src="holder.js/300x200" src="../../../web/img/productos/1.jpg">
                          <div class="caption">
                            <h3>Torres 12</h3>
                            <div class="btn-group">
                               <a class="btn btn-primary" href="#"><i class="icon-star icon-white"></i> Acci&oacute;n</a>
                               <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                               <ul class="dropdown-menu">
                                    <li><a href="#"><i class="icon-shopping-cart"></i>Agrega</a></li>
                                    <li><a href="#"><i class="icon-eye-open"></i>Leer mas..</a></li>
                                </ul>
                              </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                    <ul class="thumbnails">
                        <li class="span4">
                          <div class="thumbnail">
                              <img data-src="holder.js/300x200" src="../../../web/img/productos/2.jpg">
                            <div class="caption">
                              <h3>Torres 10</h3>
                              <div class="btn-group">
                                  <a class="btn btn-primary" href="#"><i class="icon-star icon-white"></i> Acci&oacute;n</a>
                                    <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                      <li><a href="#"><i class="icon-shopping-cart"></i>Agrega</a></li>
                                      <li><a href="#"><i class="icon-eye-open"></i>Leer mas..</a></li>
                                    </ul>
                                  </div>
                            </div>
                          </div>
                        </li>
                        <li class="span4">
                          <div class="thumbnail">
                              <img data-src="holder.js/250x200" src="../../../web/img/productos/2.jpg">
                            <div class="caption">
                              <h3>Torre 11</h3>
                              <div class="btn-group">
                                  <a class="btn btn-primary" href="#"><i class="icon-star icon-white"></i> Acci&oacute;n</a>
                                    <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                      <li><a href="#"><i class="icon-shopping-cart"></i>Agrega</a></li>
                                      <li><a href="#"><i class="icon-eye-open"></i>Leer mas..</a></li>
                                    </ul>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="span4">
                        <div class="thumbnail">
                            <img data-src="holder.js/300x200" src="../../../web/img/productos/2.jpg">
                          <div class="caption">
                            <h3>Torres 12</h3>
                            <div class="btn-group">
                               <a class="btn btn-primary" href="#"><i class="icon-star icon-white"></i> Acci&oacute;n</a>
                               <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                               <ul class="dropdown-menu">
                                    <li><a href="#"><i class="icon-shopping-cart"></i>Agrega</a></li>
                                    <li><a href="#"><i class="icon-eye-open"></i>Leer mas..</a></li>
                                </ul>
                              </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                </div>
              </div>
              <div class="tab-pane fade" id="licor2">
                  <div class="row-fluid">
                   <ul class="thumbnails">
                        <li class="span4">
                          <div class="thumbnail">
                              <img data-src="holder.js/300x200" src="../../../web/img/productos/3.jpg">
                            <div class="caption">
                              <h3>Torres 10</h3>
                              <div class="btn-group">
                                  <a class="btn btn-primary" href="#"><i class="icon-star icon-white"></i> Acci&oacute;n</a>
                                    <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                      <li><a href="#"><i class="icon-shopping-cart"></i>Agrega</a></li>
                                      <li><a href="#"><i class="icon-eye-open"></i>Leer mas..</a></li>
                                    </ul>
                                  </div>
                            </div>
                          </div>
                        </li>
                        <li class="span4">
                          <div class="thumbnail">
                              <img data-src="holder.js/250x200" src="../../../web/img/productos/3.jpg">
                            <div class="caption">
                              <h3>Torre 11</h3>
                              <div class="btn-group">
                                  <a class="btn btn-primary" href="#"><i class="icon-star icon-white"></i> Acci&oacute;n</a>
                                    <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                      <li><a href="#"><i class="icon-shopping-cart"></i>Agrega</a></li>
                                      <li><a href="#"><i class="icon-eye-open"></i>Leer mas..</a></li>
                                    </ul>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="span4">
                        <div class="thumbnail">
                            <img data-src="holder.js/300x200" src="../../../web/img/productos/3.jpg">
                          <div class="caption">
                            <h3>Torres 12</h3>
                            <div class="btn-group">
                               <a class="btn btn-primary" href="#"><i class="icon-star icon-white"></i> Acci&oacute;n</a>
                               <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                               <ul class="dropdown-menu">
                                    <li><a href="#"><i class="icon-shopping-cart"></i>Agrega</a></li>
                                    <li><a href="#"><i class="icon-eye-open"></i>Leer mas..</a></li>
                                </ul>
                              </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                   <ul class="thumbnails">
                        <li class="span4">
                          <div class="thumbnail">
                              <img data-src="holder.js/300x200" src="../../../web/img/productos/3.jpg">
                            <div class="caption">
                              <h3>Torres 10</h3>
                              <div class="btn-group">
                                  <a class="btn btn-primary" href="#"><i class="icon-star icon-white"></i> Acci&oacute;n</a>
                                    <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                      <li><a href="#"><i class="icon-shopping-cart"></i>Agrega</a></li>
                                      <li><a href="#"><i class="icon-eye-open"></i>Leer mas..</a></li>
                                    </ul>
                                  </div>
                            </div>
                          </div>
                        </li>
                        <li class="span4">
                          <div class="thumbnail">
                              <img data-src="holder.js/250x200" src="../../../web/img/productos/3.jpg">
                            <div class="caption">
                              <h3>Torre 11</h3>
                              <div class="btn-group">
                                  <a class="btn btn-primary" href="#"><i class="icon-star icon-white"></i> Acci&oacute;n</a>
                                    <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                      <li><a href="#"><i class="icon-shopping-cart"></i>Agrega</a></li>
                                      <li><a href="#"><i class="icon-eye-open"></i>Leer mas..</a></li>
                                    </ul>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="span4">
                        <div class="thumbnail">
                            <img data-src="holder.js/300x200" src="../../../web/img/productos/3.jpg">
                          <div class="caption">
                            <h3>Torres 12</h3>
                            <div class="btn-group">
                               <a class="btn btn-primary" href="#"><i class="icon-star icon-white"></i> Acci&oacute;n</a>
                               <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                               <ul class="dropdown-menu">
                                    <li><a href="#"><i class="icon-shopping-cart"></i>Agrega</a></li>
                                    <li><a href="#"><i class="icon-eye-open"></i>Leer mas..</a></li>
                                </ul>
                              </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                </div>
              </div>
              <div class="tab-pane fade" id="licor3">
               <div class="row-fluid">
                   <ul class="thumbnails">
                        <li class="span4">
                          <div class="thumbnail">
                              <img data-src="holder.js/300x200" src="../../../web/img/productos/1.jpg">
                            <div class="caption">
                              <h3>Torres 10</h3>
                              <div class="btn-group">
                                  <a class="btn btn-primary" href="#"><i class="icon-star icon-white"></i> Acci&oacute;n</a>
                                    <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                      <li><a href="#"><i class="icon-shopping-cart"></i>Agrega</a></li>
                                      <li><a href="#"><i class="icon-eye-open"></i>Leer mas..</a></li>
                                    </ul>
                                  </div>
                            </div>
                          </div>
                        </li>
                        <li class="span4">
                          <div class="thumbnail">
                              <img data-src="holder.js/250x200" src="../../../web/img/productos/1.jpg">
                            <div class="caption">
                              <h3>Torre 11</h3>
                              <div class="btn-group">
                                  <a class="btn btn-primary" href="#"><i class="icon-star icon-white"></i> Acci&oacute;n</a>
                                    <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                      <li><a href="#"><i class="icon-shopping-cart"></i>Agrega</a></li>
                                      <li><a href="#"><i class="icon-eye-open"></i>Leer mas..</a></li>
                                    </ul>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="span4">
                        <div class="thumbnail">
                            <img data-src="holder.js/300x200" src="../../../web/img/productos/1.jpg">
                          <div class="caption">
                            <h3>Torres 12</h3>
                            <div class="btn-group">
                               <a class="btn btn-primary" href="#"><i class="icon-star icon-white"></i> Acci&oacute;n</a>
                               <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                               <ul class="dropdown-menu">
                                    <li><a href="#"><i class="icon-shopping-cart"></i>Agrega</a></li>
                                    <li><a href="#"><i class="icon-eye-open"></i>Leer mas..</a></li>
                                </ul>
                              </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                   <ul class="thumbnails">
                        <li class="span4">
                          <div class="thumbnail">
                              <img data-src="holder.js/300x200" src="../../../web/img/productos/1.jpg">
                            <div class="caption">
                              <h3>Torres 10</h3>
                              <div class="btn-group">
                                  <a class="btn btn-primary" href="#"><i class="icon-star icon-white"></i> Acci&oacute;n</a>
                                    <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                      <li><a href="#"><i class="icon-shopping-cart"></i>Agrega</a></li>
                                      <li><a href="#"><i class="icon-eye-open"></i>Leer mas..</a></li>
                                    </ul>
                                  </div>
                            </div>
                          </div>
                        </li>
                        <li class="span4">
                          <div class="thumbnail">
                              <img data-src="holder.js/250x200" src="../../../web/img/productos/1.jpg">
                            <div class="caption">
                              <h3>Torre 11</h3>
                              <div class="btn-group">
                                  <a class="btn btn-primary" href="#"><i class="icon-star icon-white"></i> Acci&oacute;n</a>
                                    <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                      <li><a href="#"><i class="icon-shopping-cart"></i>Agrega</a></li>
                                      <li><a href="#"><i class="icon-eye-open"></i>Leer mas..</a></li>
                                    </ul>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="span4">
                        <div class="thumbnail">
                            <img data-src="holder.js/300x200" src="../../../web/img/productos/1.jpg">
                          <div class="caption">
                            <h3>Torres 12</h3>
                            <div class="btn-group">
                               <a class="btn btn-primary" href="#"><i class="icon-star icon-white"></i> Acci&oacute;n</a>
                               <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                               <ul class="dropdown-menu">
                                    <li><a href="#"><i class="icon-shopping-cart"></i>Agrega</a></li>
                                    <li><a href="#"><i class="icon-eye-open"></i>Leer mas..</a></li>
                                </ul>
                              </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                </div>
              </div>
            </div>
        </div>');
echo $temp->output();