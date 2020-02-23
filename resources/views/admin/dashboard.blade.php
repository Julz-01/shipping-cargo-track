@extends('admin.main')

@section('content')

@include('admin.nav')
   <!-- START Main section-->
   <section>
      <!-- START Page content-->
      <div class="main-content">
         <button type="button" class="btn btn-primary pull-right">
            <em class="fa fa-plus-circle fa-fw mr-sm"></em>Add Item</button>
         <h3>Dashboard
            <br>
            <small>Welcome {{ Auth::user()->name }}</small>
         </h3>
         <div data-toggle="notify" data-onload data-message="&lt;b&gt;Welcome {{ Auth::user()->name }}!&lt;/b&gt; Dismiss this message with a click or wait for it to disappear." data-options="{&quot;status&quot;:&quot;danger&quot;, &quot;pos&quot;:&quot;top-right&quot;}"
         class="hidden-xs"></div>
         <div class="row">
            <!-- START dashboard main content-->
            <section class="col-md-9">
               <!-- START Secondary Widgets-->
               <div class="row">
                  <div class="col-md-4">
                     <!-- START widget-->
                     <div class="panel widget">
                        <div class="panel-body">
                           <div class="text-right text-muted">
                              <em class="fa fa-users fa-2x"></em>
                           </div>
                           <h3 class="mt0">20</h3>
                           <p class="text-muted">New followers added this month</p>
                           <div class="progress progress-striped progress-xs">
                              <div role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-success progress-80">
                                 <span class="sr-only">80% Complete</span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- END widget-->
                  </div>
                  <div class="col-md-4">
                     <!-- START widget-->
                     <div class="panel widget">
                        <div class="panel-body">
                           <div class="text-right text-muted">
                              <em class="fa fa-bar-chart-o fa-2x"></em>
                           </div>
                           <h3 class="mt0">$ 1250</h3>
                           <p class="text-muted">Average Monthly Income</p>
                           <div class="progress progress-striped progress-xs">
                              <div role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-info progress-40">
                                 <span class="sr-only">40% Complete</span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- END widget-->
                  </div>
                  <div class="col-md-4">
                     <!-- START widget-->
                     <div class="panel widget">
                        <div class="panel-body">
                           <div class="text-right text-muted">
                              <em class="fa fa-trophy fa-2x"></em>
                           </div>
                           <h3 class="mt0">$ 13865</h3>
                           <p class="text-muted">Yearly Income Goal</p>
                           <div class="progress progress-striped progress-xs">
                              <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-warning progress-60">
                                 <span class="sr-only">60% Complete</span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- END widget-->
                  </div>
               </div>
               <!-- END Secondary Widgets-->
               <!-- START chart-->
               <div class="row">
                  <div class="col-lg-12">
                     <!-- START widget-->
                     <div class="panel widget">
                        <div class="panel-body bg-primary">
                           <div class="h5 mt0">Received all time</div>
                           <!-- Line chart-->
                           <div data-type="line" data-height="80" data-width="100%" data-line-width="2" data-line-color="#dddddd" data-spot-color="#bbbbbb" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="3" data-resize="true"
                           class="inlinesparkline sparkline">
                              <!-- 1,3,4,7,5,9,4,4,7,5,9,6,4-->
                           </div>
                           <!-- Bar chart-->
                           <div class="text-center">
                              <div data-bar-color="#fff" data-height="50" data-bar-width="6" data-bar-spacing="6" class="inlinesparkline inline">1,3,4,7,5,9,4,4,7,5,9,6,4</div>
                           </div>
                        </div>
                        <div class="panel-body bg-inverse">
                           <div class="row row-table text-center">
                              <div class="col-xs-4">
                                 <p class="m0 h3">15080</p>
                                 <p class="m0 text-muted">Shot Views</p>
                              </div>
                              <div class="col-xs-4">
                                 <p class="m0 h3">12000</p>
                                 <p class="m0 text-muted">Likes</p>
                              </div>
                              <div class="col-xs-4">
                                 <p class="m0 h3">5100</p>
                                 <p class="m0 text-muted">Comments</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- END widget-->
                  </div>
               </div>
               <!-- END chart-->
               <!-- START messages and activity-->
               <div class="row">
                  <div class="col-md-6">
                     <div class="panel panel-default">
                        <div class="panel-heading">
                           <div class="pull-right label label-info">33</div>
                           <div class="panel-title">Unread Messages</div>
                        </div>
                        <!-- START list group-->
                        <div class="list-group">
                           <!-- START list group item-->
                           <a href="#" class="list-group-item">
                              <div class="media">
                                 <div class="pull-left">
                                    <img src="app/img/user/01.jpg" alt="Image" class="media-object img-circle thumb48">
                                 </div>
                                 <div class="media-body clearfix">
                                    <small class="pull-right">2h</small>
                                    <strong class="media-heading text-primary">
                                       <span class="point point-success point-lg text-left"></span>Sheila Carter</strong>
                                    <p class="mb-sm">
                                       <small>Cras sit amet nibh libero, in gravida nulla. Nulla...</small>
                                    </p>
                                 </div>
                              </div>
                           </a>
                           <!-- END list group item-->
                           <!-- START list group item-->
                           <a href="#" class="list-group-item">
                              <div class="media">
                                 <div class="pull-left">
                                    <img src="app/img/user/04.jpg" alt="Image" class="media-object img-circle thumb48">
                                 </div>
                                 <div class="media-body clearfix">
                                    <small class="pull-right">3h</small>
                                    <strong class="media-heading text-primary">
                                       <span class="point point-success point-lg text-left"></span>Rich Reynolds</strong>
                                    <p class="mb-sm">
                                       <small>Cras sit amet nibh libero, in gravida nulla. Nulla...</small>
                                    </p>
                                 </div>
                              </div>
                           </a>
                           <!-- END list group item-->
                           <!-- START list group item-->
                           <a href="#" class="list-group-item">
                              <div class="media">
                                 <div class="pull-left">
                                    <img src="app/img/user/03.jpg" alt="Image" class="media-object img-circle thumb48">
                                 </div>
                                 <div class="media-body clearfix">
                                    <small class="pull-right">4h</small>
                                    <strong class="media-heading text-primary">
                                       <span class="point point-danger point-lg text-left"></span>Beverley Pierce</strong>
                                    <p class="mb-sm">
                                       <small>Cras sit amet nibh libero, in gravida nulla. Nulla...</small>
                                    </p>
                                 </div>
                              </div>
                           </a>
                           <!-- END list group item-->
                           <!-- START list group item-->
                           <a href="#" class="list-group-item">
                              <div class="media">
                                 <div class="pull-left">
                                    <img src="app/img/user/06.jpg" alt="Image" class="media-object img-circle thumb48">
                                 </div>
                                 <div class="media-body clearfix">
                                    <small class="pull-right">4h</small>
                                    <strong class="media-heading text-primary">
                                       <span class="point point-danger point-lg text-left"></span>Alex Somar</strong>
                                    <p class="mb-sm">
                                       <small>Vestibulum pretium aliquam scelerisque.</small>
                                    </p>
                                 </div>
                              </div>
                           </a>
                           <!-- END list group item-->
                        </div>
                        <!-- END list group-->
                        <!-- START panel footer-->
                        <div class="panel-footer clearfix">
                           <a href="#" class="pull-left">
                              <small>Read All</small>
                           </a>
                           <a href="#" class="pull-right">
                              <small>Dismiss All</small>
                           </a>
                        </div>
                        <!-- END panel-footer-->
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="panel panel-default">
                        <div class="panel-heading">
                           <div class="panel-title">Activity feed</div>
                        </div>
                        <!-- START list group-->
                        <div class="list-group">
                           <!-- START list group item-->
                           <div class="list-group-item">
                              <div class="media">
                                 <div class="pull-left">
                                    <span class="fa-stack fa-lg">
                                       <em class="fa fa-circle fa-stack-2x text-green"></em>
                                       <em class="fa fa-cloud-upload fa-stack-1x fa-inverse text-white"></em>
                                    </span>
                                 </div>
                                 <div class="media-body clearfix">
                                    <div class="media-heading text-green m0">NEW UPLOAD</div>
                                    <p class="m0">
                                       <small>New file <a href="#">entities.xls </a>uploaded to the cloud</small>
                                    </p>
                                    <small>5 minutes ago</small>
                                 </div>
                              </div>
                           </div>
                           <!-- END list group item-->
                           <!-- START list group item-->
                           <div class="list-group-item">
                              <div class="media">
                                 <div class="pull-left">
                                    <span class="fa-stack fa-lg">
                                       <em class="fa fa-circle fa-stack-2x text-info"></em>
                                       <em class="fa fa-file-text-o fa-stack-1x fa-inverse text-white"></em>
                                    </span>
                                 </div>
                                 <div class="media-body clearfix">
                                    <div class="media-heading text-info m0">NEW DOCUMENT</div>
                                    <p class="m0">
                                       <small>New document <a href="#">Lorem ipsum </a>created</small>
                                    </p>
                                    <small>1 hour ago</small>
                                 </div>
                              </div>
                           </div>
                           <!-- END list group item-->
                           <!-- START list group item-->
                           <div class="list-group-item">
                              <div class="media">
                                 <div class="pull-left">
                                    <span class="fa-stack fa-lg">
                                       <em class="fa fa-circle fa-stack-2x text-danger"></em>
                                       <em class="fa fa-exclamation fa-stack-1x fa-inverse text-white"></em>
                                    </span>
                                 </div>
                                 <div class="media-body clearfix">
                                    <div class="media-heading text-danger m0">IMPORTANT MESSAGE</div>
                                    <p class="m0">
                                       <small>Sammy Sam sent you an important messsage. <a href="#">Read now</a>
                                       </small>
                                    </p>
                                    <small>3 hours ago</small>
                                 </div>
                              </div>
                           </div>
                           <!-- END list group item-->
                           <!-- START list group item-->
                           <div class="list-group-item">
                              <div class="media">
                                 <div class="pull-left">
                                    <span class="fa-stack fa-lg">
                                       <em class="fa fa-circle fa-stack-2x text-warning"></em>
                                       <em class="fa fa-clock-o fa-stack-1x fa-inverse text-white"></em>
                                    </span>
                                 </div>
                                 <div class="media-body clearfix">
                                    <div class="media-heading text-warning m0">MEETING</div>
                                    <p class="m0">
                                       <small>Rich Reynods added a new meeting. <a href="#" class="label label-info">JOIN</a>
                                       </small>
                                    </p>
                                    <small>yesterday</small>
                                 </div>
                              </div>
                           </div>
                           <!-- END list group item-->
                        </div>
                        <!-- END list group-->
                        <!-- START panel footer-->
                        <div class="panel-footer clearfix">
                           <a href="#" class="pull-left">
                              <small>Load more</small>
                           </a>
                        </div>
                        <!-- END panel-footer-->
                     </div>
                  </div>
               </div>
               <!-- END messages and activity-->
            </section>
            <!-- END dashboard main content-->
            <!-- START dashboard sidebar-->
            <aside class="col-md-3">
               <!-- START widget-->
               <div class="panel widget">
                  <div class="panel-body bg-warning text-center">
                     <div class="text-lg m0">18&deg;</div>
                     <p>Paris</p>
                     <div class="mb-lg"></div>
                     <em class="fa fa-sun-o fa-2x"></em>
                  </div>
               </div>
               <!-- END widget-->
               <!-- START widget-->
               <div data-toggle="play-animation" data-play="fadeInDown" data-offset="0" data-delay="100" class="panel widget">
                  <div class="panel-body bg-primary">
                     <div class="row row-table row-flush">
                        <div class="col-xs-8">
                           <p class="mb0">New visitors</p>
                           <h3 class="m0">1.5k</h3>
                        </div>
                        <div class="col-xs-4 text-center">
                           <em class="fa fa-user fa-2x"><sup class="fa fa-plus"></sup>
                           </em>
                        </div>
                     </div>
                  </div>
                  <div class="panel-body">
                     <!-- Bar chart-->
                     <div class="text-center">
                        <div data-bar-color="primary" data-height="30" data-bar-width="6" data-bar-spacing="6" class="inlinesparkline inline">5,3,4,6,5,9,4,4,10,5,9,6,4</div>
                     </div>
                  </div>
               </div>
               <!-- START widget-->
               <div data-toggle="play-animation" data-play="fadeInDown" data-offset="0" data-delay="500" class="panel widget">
                  <div class="panel-body bg-purple">
                     <div class="row row-table row-flush">
                        <div class="col-xs-8">
                           <p class="mb0">Bounce Rate</p>
                           <h3 class="m0">50%</h3>
                        </div>
                        <div class="col-xs-4 text-center">
                           <em class="fa fa-users fa-2x"></em>
                        </div>
                     </div>
                  </div>
                  <div class="panel-body">
                     <!-- Bar chart-->
                     <div class="text-center">
                        <div data-bar-color="purple" data-height="30" data-bar-width="6" data-bar-spacing="6" class="inlinesparkline inline">10,30,40,70,50,90,70,50,90,40,40,60,40</div>
                     </div>
                  </div>
               </div>
               <!-- START widget-->
               <div data-toggle="play-animation" data-play="fadeInDown" data-offset="0" data-delay="1000" class="panel widget">
                  <div class="panel-body bg-danger">
                     <div class="row row-table row-flush">
                        <div class="col-xs-8">
                           <p class="mb0">Searchs</p>
                           <h3 class="m0">28%</h3>
                        </div>
                        <div class="col-xs-4 text-center">
                           <em class="fa fa-search fa-2x"></em>
                        </div>
                     </div>
                  </div>
                  <div class="panel-body">
                     <!-- Bar chart-->
                     <div class="text-center">
                        <div data-bar-color="danger" data-height="30" data-bar-width="6" data-bar-spacing="6" class="inlinesparkline inline">2,7,5,9,4,2,7,5,7,5,9,6,4</div>
                     </div>
                  </div>
               </div>
               <!-- START widget-->
               <div data-toggle="play-animation" data-play="fadeInDown" data-offset="0" data-delay="1500" class="panel widget">
                  <div class="panel-body bg-success">
                     <div class="row row-table row-flush">
                        <div class="col-xs-8">
                           <p class="mb0">Traffic</p>
                           <h3 class="m0">140.5 kb</h3>
                        </div>
                        <div class="col-xs-4 text-center">
                           <em class="fa fa-globe fa-2x"></em>
                        </div>
                     </div>
                  </div>
                  <div class="panel-body">
                     <!-- Bar chart-->
                     <div class="text-center">
                        <div data-bar-color="success" data-height="30" data-bar-width="6" data-bar-spacing="6" class="inlinesparkline inline">4,7,5,9,6,4,8,6,3,4,7,5,9</div>
                     </div>
                  </div>
               </div>
            </aside>
            <!-- END dashboard sidebar-->
         </div>
      </div>
      <!-- END Page content-->
      <!-- START Page footer-->
      <footer>&copy; 2019 - Macro Ocean</footer>
      <!-- END Page Footer-->
   </section>
   <!-- END Main section-->
</div>
@endsection
