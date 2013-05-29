<?php

/* AdminAdminBundle:Index:index.html.twig */
class __TwigTemplate_2ba9907c691b529e23c54fba72271162 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AdminAdminBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Admin iGereg";
    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        // line 7
        echo "<script>
    \$(\"#sidebar_menu_dashboard\").addClass(\"active\");
</script>
";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "
<div class=\"row-fluid\">
        <div class=\"span6 \">
        <div class=\"box color_3 title_big height_big paint_hover\">
          <div class=\"title\">
            <div class=\"row-fluid\">
              <div class=\"span12\">
                <h4> </i><span>Campaigns</span> </h4>
              </div>
              <!-- End .span12 --> 
            </div>
            <!-- End .row-fluid --> 
            
          </div>
          <!-- End .title -->
          <div class=\"content\"  style=\"padding-top:35px;\">
            <div id=\"placeholder\" style=\"width:100%;height:240px;\"> </div>
          </div>
          </div>
        </div>
        <!-- End .box .span6-->
        <div class=\"span6\">
          <div class=\"row-fluid fluid\">
            <div class=\"span6\">
              <div class=\" box color_2 height_medium paint_hover\">
                <div class=\"content numbers\">
                  <h3 class=\"value\">219.103</h3>
                  <div class=\"description mb5\">Audience Reach</div>
                  <h1 class=\"value\">3.28<span class=\"percent\">%</span></h1>
                  <div class=\"description\">Average CTR</div>
                </div>
              </div>
            </div>
            <!-- End .span6 -->
            <div class=\"span6\">
              <div class=\"box color_25 height_medium paint_hover\">
                <div class=\"content numbers\">
                  <h3 class=\"value\">7.147</h3>
                  <div class=\"description mb5\">Total Clicks</div>
                  <h1 class=\"value\">718.862</h1>
                  <div class=\"description\">Total Impressions</div>
                </div>
              </div>
            </div>
            <!-- End .span6 --> 
          </div>
          <!-- End .row-fluid -->
          <div class=\"row-fluid fluid\">
            <div class=\"span6\">
              <div class=\" box  height_medium title_big paint_hover\">
                <div class=\"title\">
                  <div class=\"row-fluid\">
                    <div class=\"span12\">
                      <h5> </i><span>Fundraisers</span> </h5>
                    </div>
                    <!-- End .span12 --> 
                  </div>
                  <!-- End .row-fluid --> 
                </div>
                <!-- End .title -->
                <div class=\"content\" style=\"padding-top:28px;\">
                  <div id=\"placeholder2\" style=\"width:100%;height:85px;\"></div>
                  <div class=\"row-fluid description\">
                    <div class=\"pull-left\">LAST 30 DAYS</div>
                    <div class=\"pull-right\">TODAY</div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End .span6 -->
            <div class=\"span6\">
              <div class=\" box color_26 height_medium paint_hover\">
                <div class=\"content icon big_icon\"> <a href=\"#\" ><img align=\"center\" src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/img/general/contacts_icon.png"), "html", null, true);
        echo "\" /></a>
                  <div class=\"description\">CONTACTS</div>
                </div>
              </div>
            </div>
            <!-- End .span6 --> 
          </div>
          <!-- End .row-fluid --> 
          
        </div>
        <!-- End.span6--> 
      </div>
      <!-- End .row-fluid -->
      
      <div class=\"row-fluid\">
        <div class=\"span8\">
          <div class=\"box height_big paint\">
            <div class=\"title\">
              <h4> <span>Distribution by Country</span> </h4>
            </div>
            <!-- End .title -->
            <div class=\"content full\">
              <table id=\"datatable_example\" class=\"responsive table table-hover full\">
                <thead>
                  <tr>
                    <th class=\"jv no_sort\"> No </th>
                    <th class=\"ue\"> Browser </th>
                    <th class=\"ms no_sort \"> Visits </th>
                    <th class=\"Yy to_hide_phone\"> % Visits </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td> 1 </td>
                    <td> United States </td>
                    <td class=\"ms\"> 161.083 </td>
                    <td class=\"to_hide_phone\"> 45,73% <span class=\"bar1 no_ie\">3,4,10,5,3,6,3</span></td>
                  </tr>
                  <tr>
                    <td> 2 </td>
                    <td> Canada </td>
                    <td class=\"ms\"> 93.966 </td>
                    <td class=\"to_hide_phone\"> 26,67% <span class=\"bar2 no_ie\">1, 4, 6, 7,4, 2,4</span></td>
                  </tr>
                  <tr>
                    <td> 3 </td>
                    <td> Argentina </td>
                    <td class=\"ms\"> 69.640 </td>
                    <td class=\"to_hide_phone\"> 19,77% <span class=\"bar2 no_ie\">1, 2, 2, 7,4, 2,2</span></td>
                  </tr>
                  <tr>
                    <td> 4 </td>
                    <td> Romania </td>
                    <td class=\"ms\"> 24.421 </td>
                    <td class=\"to_hide_phone\"> 6,93% &nbsp; <span class=\"bar2 no_ie\">3, 5, 6, 9,10, 9,8</span></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- End .content -->
            <div class=\"description\">Some explanation text here <i class=\"gicon-info-sign icon-white\"></i></div>
          </div>
          
          <!-- End .box --> 
        </div>
        <!-- End .span8 -->
        
        <div class=\"span4\">
          <div class=\"box height_big paint\">
            <div class=\"title\">
              <h4> <span>Top Users</span> </h4>
            </div>
            <!-- End .title -->
            
            <ul class=\"users unstyled content\">
              <li>
                <div class=\"info row-fluid\"><span class=\"number pull-left text_color_0\">1</span>
                  <h2 class=\"pull-left\">George</h2>
                </div>
                <div class=\"row-fluid\">
                  <div class=\"progress small\" style=\"width: 60%;\"></div>
                  <div class=\"value\">12k Reach</div>
                </div>
              </li>
              <li>
                <div class=\"info row-fluid\"><span class=\"number pull-left text_color_0\">2</span>
                  <h2 class=\"pull-left\">John</h2>
                </div>
                <div class=\"row-fluid\">
                  <div class=\"progress small\" style=\"width: 40%;\"></div>
                  <div class=\"value\">8.3k Reach</div>
                </div>
              </li>
              <li>
                <div class=\"info row-fluid\"><span class=\"number pull-left text_color_0\">3</span>
                  <h2 class=\"pull-left\">Michael</h2>
                </div>
                <div class=\"row-fluid\">
                  <div class=\"progress small\" style=\"width: 25%;\"></div>
                  <div class=\"value\">6.7k Reach</div>
                </div>
              </li>
            </ul>
            <!-- End .content -->
            <div class=\"description\">Some explanation text here <i class=\"gicon-info-sign icon-white\"></i> </div>
          </div>
          <!-- End .box --> 
        </div>
        <!-- End .span4 --> 
      </div>
      <!-- End .row-fluid -->
      
      <div class=\"row-fluid\">
        <div class=\"row-fluid box color_2 title_medium height_medium2 bar_stats paint_hover \">
          <div class=\"title hidden-phone\">
            <h5><span>Envato</span></h5>
          </div>
          <!-- End .title -->
          <div class=\"content row-fluid fluid numbers\">
            <div class=\"span3 stats hidden-phone\">
              <div id=\"placeholder3\" style=\"width:100%;height:65px;margin-top:7px\"></div>
            </div>
            <div class=\"span2 average_ctr\">
              <h1 class=\"value\">0.72<span class=\"percent\">%</span></h1>
              <div class=\"description mt15\" >AVERAGE CTR</div>
            </div>
            <div class=\"span3 shown_left\">
              <div class=\"row-fluid fluid\">
                <div class=\"span6\">
                  <div class=\"description\">SHOWN</div>
                  <h2 class=\"value\">3.240</h2>
                  <div class=\"progress small\">
                    <div class=\"bar white\" style=\"width: 100%;\"></div>
                  </div>
                  <div class=\"description\" >IMPRESSIONS STATS</div>
                </div>
                <div class=\"span6 full\">
                  <div class=\"description text_color_dark\">LEFT</div>
                  <h2 class=\"value text_color_dark\">16.760</h2>
                  <div class=\"progress small\">
                    <div class=\"bar \" style=\"width: 0%;\"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"span3 total_days\">
              <div class=\"row-fluid\">
                <div class=\"span6 total_clicks\">
                  <h1 class=\"value\">103</h1>
                  <div class=\"description mt15\" >TOTAL CLICKS</div>
                </div>
                <div class=\"span6 days_left\">
                  <h1 class=\"value text_color_dark\">28</h1>
                  <div class=\"description mt15\" >DAYS LEFT</div>
                </div>
              </div>
            </div>
            <div class=\"span1 stick top right result height_medium2\"> <img src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/img/arrows_up.png"), "html", null, true);
        echo "\" >
              <div class=\"description mt15\" >Good</div>
            </div>
          </div>
          <!-- End .row-fluid --> 
          <!-- End .content --> 
        </div>
        <!-- End .box --> 
        
      </div>
      <!-- End .row-fluid -->
      
      <div class=\"row-fluid\">
        <div class=\"row-fluid box color_27 title_medium height_medium2 bar_stats paint_hover\">
          <div class=\"title hidden-phone\">
            <h5><span>Facebook</span></h5>
          </div>
          <!-- End .title -->
          <div class=\"content row-fluid fluid numbers\">
            <div class=\"span3 stats hidden-phone\">
              <div id=\"placeholder4\" style=\"width:100%;height:65px;margin-top:7px\"></div>
            </div>
            <div class=\"span2 average_ctr\">
              <h1 class=\"value\">1.37<span class=\"percent\">%</span></h1>
              <div class=\"description mt15\" >AVERAGE CTR</div>
            </div>
            <div class=\"span3 shown_left\">
              <div class=\"row-fluid fluid\">
                <div class=\"span6\">
                  <div class=\"description\">SHOWN</div>
                  <h2 class=\"value\">1.220</h2>
                  <div class=\"progress small\"  >
                    <div class=\"bar white \" style=\"width: 100%;\"></div>
                  </div>
                  <div class=\"description\" >IMPRESSIONS STATS</div>
                </div>
                <div class=\"span6 full\">
                  <div class=\"description text_color_dark\">LEFT</div>
                  <h2 class=\"value text_color_dark\">12.420</h2>
                  <div class=\"progress small\">
                    <div class=\"bar\" style=\"width: 0%;\"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"span3 total_days\">
              <div class=\"row-fluid\">
                <div class=\"span6 total_clicks\">
                  <h1 class=\"value\">67</h1>
                  <div class=\"description mt15\" >TOTAL CLICKS</div>
                </div>
                <div class=\"span6 days_left\">
                  <h1 class=\"value text_color_dark\">30</h1>
                  <div class=\"description mt15\" >DAYS LEFT</div>
                </div>
              </div>
            </div>
            <div class=\"span1 stick top right result height_medium2\"> <img src=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/img/arrows_down.png"), "html", null, true);
        echo "\">
              <div class=\"description mt15\" > &nbsp;&nbsp;Bad</div>
            </div>
          </div>
          <!-- End .row-fluid --> 
          <!-- End .content --> 
        </div>
        <!-- End .box --> 
        
      </div>
      <!-- End .row-fluid -->
      
      <div class=\"row-fluid\">
        <div class=\"span6\">
          <div class=\"box gradient color_25 height_xbig paint_hover1\">
            <div class=\"title row-fluid\">
              <h4 class=\"pull-left\"><span>Task List</span></h4>
              <div class=\"btn-toolbar pull-right \">
                <div class=\"btn-group\"> <a class=\"btn\">Add New +</a> <a class=\"btn change_color_outside\"><i class=\"paint_bucket\"></i></a> </div>
              </div>
            </div>
            <!-- End .title -->
            <div class=\"content row-fluid\">
              <div id=\"todoapp\" class=\"row-fluid\">
                <div class=\"todos\">
                  <ul data-bind=\"foreach: tasks, visible: tasks().length > 0\" id=\"todo-list\" class=\"unstyled\">
                    <li>
                      <div class=\"todo\" data-bind=\"css: { editing: isEditing }, event: { dblclick: startEdit }\">
                        <div class=\"display\" data-bind=\"css: { done: isDone }\">
                          <input type=\"checkbox\" class=\"check\" data-bind=\"checked: isDone\" />
                          <div class=\"todo-text\" data-bind=\"html: title\"></div>
                          <a href=\"#\" class=\"todo-destroy\" data-bind=\"click: \$parent.removeTask\">&times;</a> </div>
                        <div class=\"edit\">
                          <form data-bind=\"submit: updateTask\" class=\"full\">
                            <input data-bind=\"value: title\" class=\"row-fluid\"/>
                          </form>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <div id=\"credits\" class=\"description\"> *Double-click to edit tasks. Enter to finish. </div>
            </div>
            <!-- End .content -->
            <div class=\"description\"> You have <b data-bind=\"text: incompleteTasks().length\">&nbsp;</b> incomplete task(s) <span data-bind=\"visible: incompleteTasks().length == 0\">- its beer time!</span> <a class=\"pull-right\" data-bind=\"visible: completeTasks().length &gt; 0, click: removeCompleted\" href=\"#\" id=\"clear-completed\">Clear Completed Tasks </a> </div>
          </div>
          <!-- End .box --> 
        </div>
        <!-- End .span6 -->
        <div class=\"span6\">
          <div class=\"box color_2 \">
            <div class=\"title row-fluid\">
              <h4 class=\"pull-left\"><span>Messages</span></h4>
              <div class=\"btn-toolbar pull-right \">
                <div class=\"btn-group\"> <a class=\"btn\">View All</a> <a class=\"btn change_color_outside\"><i class=\"paint_bucket\"></i></a> </div>
              </div>
            </div>
            <!-- End .title -->
            <div class=\"content row-fluid\">
              <ul class=\"messages_layout\">
               
                
              
                <li class=\"from_user left\"> <a href=\"#\" class=\"avatar\"><img src=\"";
        // line 363
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/img/message_avatar2.png"), "html", null, true);
        echo "\"/></a>
                  <div class=\"message_wrap\"> <span class=\"arrow\"></span>
                    <div class=\"info\"> <a class=\"name\" href=\"#\">Celeste Holm</a> <span class=\"author\"><a href=\"#\">@celeste</a></span></div>
                    <div class=\"text\"> All I want is to be a monkey of moderate intelligence who wears a suit… that's why I'm transferring to business school! I had more, but you go ahead.  Dissect its brain! </div>
                    <div class=\"footer\">
                        <span class=\"time\">1 hour ago</span>
                        <div class=\"actions pull-right hidden-phone\">
                          <ul class=\"pull-right\">
                            <li><a href=\"#\"><i class=\" gicon-share-alt icon-white\"></i>Reply</a></li>
                            <li><a href=\"#\"><i class=\" gicon-share icon-white\"></i>Share</a></li>
                            <li><a href=\"#\"><i class=\" gicon-star icon-white\"></i>Favorite</a></li>
                          </ul>
                        </div>
                    </div>
                  </div>
                </li>
                
                <li class=\"by_myself right\"> <a href=\"#\" class=\"avatar\"><img src=\"";
        // line 380
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/img/message_avatar4.png"), "html", null, true);
        echo "\"/></a>
                  <div class=\"message_wrap\"> <span class=\"arrow\"></span>
                    <div class=\"info\"> <a class=\"name\" href=\"#\">Bender (myself)</a> <span class=\"author\"><a href=\"#\">@bender</a></span></div>
                    <div class=\"text\"> Man, I'm sore all over.  I feel like I just went ten rounds with mighty Thor. File not found. </div>
                    <div class=\"footer\">
                        <span class=\"time\">4 hours ago</span>
                        <div class=\"actions pull-right hidden-phone\">
                          <ul class=\"pull-right\">
                            <li><a href=\"#\"><i class=\" gicon-share-alt icon-white\"></i>Reply</a></li>
                            <li><a href=\"#\"><i class=\" gicon-share icon-white\"></i>Share</a></li>
                            <li><a href=\"#\"><i class=\" gicon-star icon-white\"></i>Favorite</a></li>
                          </ul>
                        </div>
                    </div>
                  </div>
                </li>
                <li class=\"from_user left\"> <a href=\"#\" class=\"avatar\"><img src=\"";
        // line 396
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/img/message_avatar2.png"), "html", null, true);
        echo "\"/></a>
                  <div class=\"message_wrap\"> <span class=\"arrow\"></span>
                    <div class=\"info\"> <a class=\"name\" href=\"#\">Celeste Holm</a> <span class=\"author\"><a href=\"#\">@celeste</a></span></div>
                    <div class=\"text\"> And I'd do it again! And perhaps a third time! But that would be it. Are you crazy? </div>
                    <div class=\"footer\">
                        <span class=\"time\">1 hour ago</span>
                        <div class=\"actions pull-right hidden-phone\">
                          <ul class=\"pull-right\">
                            <li><a href=\"#\"><i class=\" gicon-share-alt icon-white\"></i>Reply</a></li>
                            <li><a href=\"#\"><i class=\" gicon-share icon-white\"></i>Share</a></li>
                            <li><a href=\"#\"><i class=\" gicon-star icon-white\"></i>Favorite</a></li>
                          </ul>
                        </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <!-- End .content --> 
          </div>
          <!-- End .box --> 
        </div>
        <!-- End .span6 --> 
        
      </div>
      <!-- End .row-fluid --> 
";
    }

    public function getTemplateName()
    {
        return "AdminAdminBundle:Index:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  449 => 396,  430 => 380,  410 => 363,  343 => 299,  283 => 242,  123 => 85,  49 => 13,  46 => 12,  39 => 7,  36 => 6,  30 => 4,);
    }
}
