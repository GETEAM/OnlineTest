<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/css/7982fac')) {
            // _assetic_7982fac
            if ($pathinfo === '/css/7982fac.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '7982fac',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_7982fac',);
            }

            // _assetic_7982fac_0
            if ($pathinfo === '/css/7982fac_login_1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '7982fac',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_7982fac_0',);
            }

        }

        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/06f6c0b')) {
                // _assetic_06f6c0b
                if ($pathinfo === '/js/06f6c0b.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '06f6c0b',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_06f6c0b',);
                }

                // _assetic_06f6c0b_0
                if ($pathinfo === '/js/06f6c0b_studentAdd_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '06f6c0b',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_06f6c0b_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/1e4f4e4')) {
                // _assetic_1e4f4e4
                if ($pathinfo === '/js/1e4f4e4.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '1e4f4e4',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_1e4f4e4',);
                }

                if (0 === strpos($pathinfo, '/js/1e4f4e4_')) {
                    if (0 === strpos($pathinfo, '/js/1e4f4e4_jquery')) {
                        // _assetic_1e4f4e4_0
                        if ($pathinfo === '/js/1e4f4e4_jquery.tablesorter.min_1.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '1e4f4e4',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_1e4f4e4_0',);
                        }

                        // _assetic_1e4f4e4_1
                        if ($pathinfo === '/js/1e4f4e4_jquery-ui.min_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '1e4f4e4',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_1e4f4e4_1',);
                        }

                    }

                    // _assetic_1e4f4e4_2
                    if ($pathinfo === '/js/1e4f4e4_resultList_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '1e4f4e4',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_1e4f4e4_2',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/44a1672')) {
                // _assetic_44a1672
                if ($pathinfo === '/js/44a1672.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '44a1672',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_44a1672',);
                }

                if (0 === strpos($pathinfo, '/js/44a1672_')) {
                    // _assetic_44a1672_0
                    if ($pathinfo === '/js/44a1672_jquery.tablesorter.min_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '44a1672',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_44a1672_0',);
                    }

                    // _assetic_44a1672_1
                    if ($pathinfo === '/js/44a1672_studentList_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '44a1672',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_44a1672_1',);
                    }

                    // _assetic_44a1672_2
                    if ($pathinfo === '/js/44a1672_jquery-ui.min_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '44a1672',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_44a1672_2',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/74b17d4')) {
                // _assetic_74b17d4
                if ($pathinfo === '/js/74b17d4.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '74b17d4',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_74b17d4',);
                }

                if (0 === strpos($pathinfo, '/js/74b17d4_')) {
                    // _assetic_74b17d4_0
                    if ($pathinfo === '/js/74b17d4_jquery.tablesorter.min_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '74b17d4',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_74b17d4_0',);
                    }

                    // _assetic_74b17d4_1
                    if ($pathinfo === '/js/74b17d4_paperList_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '74b17d4',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_74b17d4_1',);
                    }

                    if (0 === strpos($pathinfo, '/js/74b17d4_jquery-ui')) {
                        // _assetic_74b17d4_2
                        if ($pathinfo === '/js/74b17d4_jquery-ui.min_3.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '74b17d4',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_74b17d4_2',);
                        }

                        // _assetic_74b17d4_3
                        if ($pathinfo === '/js/74b17d4_jquery-ui-timepicker-addon_4.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '74b17d4',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_74b17d4_3',);
                        }

                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/0da2f3b')) {
                // _assetic_0da2f3b
                if ($pathinfo === '/js/0da2f3b.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0da2f3b',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_0da2f3b',);
                }

                if (0 === strpos($pathinfo, '/js/0da2f3b_')) {
                    // _assetic_0da2f3b_0
                    if ($pathinfo === '/js/0da2f3b_jquery.tablesorter.min_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '0da2f3b',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_0da2f3b_0',);
                    }

                    // _assetic_0da2f3b_1
                    if ($pathinfo === '/js/0da2f3b_resultDetail_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '0da2f3b',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_0da2f3b_1',);
                    }

                    // _assetic_0da2f3b_2
                    if ($pathinfo === '/js/0da2f3b_jquery-ui.min_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '0da2f3b',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_0da2f3b_2',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/d4ec7df')) {
                // _assetic_d4ec7df
                if ($pathinfo === '/js/d4ec7df.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd4ec7df',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_d4ec7df',);
                }

                if (0 === strpos($pathinfo, '/js/d4ec7df_')) {
                    // _assetic_d4ec7df_0
                    if ($pathinfo === '/js/d4ec7df_studentProfile_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'd4ec7df',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_d4ec7df_0',);
                    }

                    // _assetic_d4ec7df_1
                    if ($pathinfo === '/js/d4ec7df_jquery-ui.min_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'd4ec7df',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_d4ec7df_1',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/32aeb79')) {
                // _assetic_32aeb79
                if ($pathinfo === '/js/32aeb79.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '32aeb79',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_32aeb79',);
                }

                if (0 === strpos($pathinfo, '/js/32aeb79_')) {
                    if (0 === strpos($pathinfo, '/js/32aeb79_jquery')) {
                        // _assetic_32aeb79_0
                        if ($pathinfo === '/js/32aeb79_jquery.tablesorter.min_1.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '32aeb79',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_32aeb79_0',);
                        }

                        if (0 === strpos($pathinfo, '/js/32aeb79_jquery-ui')) {
                            // _assetic_32aeb79_1
                            if ($pathinfo === '/js/32aeb79_jquery-ui.min_2.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '32aeb79',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_32aeb79_1',);
                            }

                            // _assetic_32aeb79_2
                            if ($pathinfo === '/js/32aeb79_jquery-ui-timepicker-addon_3.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '32aeb79',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_32aeb79_2',);
                            }

                        }

                    }

                    // _assetic_32aeb79_3
                    if ($pathinfo === '/js/32aeb79_examList_4.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '32aeb79',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_32aeb79_3',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/6a9f67b')) {
                // _assetic_6a9f67b
                if ($pathinfo === '/js/6a9f67b.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '6a9f67b',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_6a9f67b',);
                }

                if (0 === strpos($pathinfo, '/js/6a9f67b_')) {
                    // _assetic_6a9f67b_0
                    if ($pathinfo === '/js/6a9f67b_jquery.tablesorter.min_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '6a9f67b',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_6a9f67b_0',);
                    }

                    // _assetic_6a9f67b_1
                    if ($pathinfo === '/js/6a9f67b_teacherActivation_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '6a9f67b',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_6a9f67b_1',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/5')) {
                if (0 === strpos($pathinfo, '/js/59b35ba')) {
                    // _assetic_59b35ba
                    if ($pathinfo === '/js/59b35ba.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '59b35ba',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_59b35ba',);
                    }

                    if (0 === strpos($pathinfo, '/js/59b35ba_')) {
                        // _assetic_59b35ba_0
                        if ($pathinfo === '/js/59b35ba_jquery-ui_1.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '59b35ba',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_59b35ba_0',);
                        }

                        if (0 === strpos($pathinfo, '/js/59b35ba_a')) {
                            // _assetic_59b35ba_1
                            if ($pathinfo === '/js/59b35ba_autoTextarea_2.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '59b35ba',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_59b35ba_1',);
                            }

                            // _assetic_59b35ba_2
                            if ($pathinfo === '/js/59b35ba_answerDetail_3.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '59b35ba',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_59b35ba_2',);
                            }

                        }

                    }

                }

                if (0 === strpos($pathinfo, '/js/56ee2ad')) {
                    // _assetic_56ee2ad
                    if ($pathinfo === '/js/56ee2ad.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '56ee2ad',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_56ee2ad',);
                    }

                    if (0 === strpos($pathinfo, '/js/56ee2ad_')) {
                        // _assetic_56ee2ad_0
                        if ($pathinfo === '/js/56ee2ad_jquery-ui_1.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '56ee2ad',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_56ee2ad_0',);
                        }

                        if (0 === strpos($pathinfo, '/js/56ee2ad_a')) {
                            // _assetic_56ee2ad_1
                            if ($pathinfo === '/js/56ee2ad_autoTextarea_2.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '56ee2ad',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_56ee2ad_1',);
                            }

                            // _assetic_56ee2ad_2
                            if ($pathinfo === '/js/56ee2ad_ajaxfileupload_3.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '56ee2ad',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_56ee2ad_2',);
                            }

                        }

                        // _assetic_56ee2ad_3
                        if ($pathinfo === '/js/56ee2ad_jquery.combox_4.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '56ee2ad',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_56ee2ad_3',);
                        }

                        // _assetic_56ee2ad_4
                        if ($pathinfo === '/js/56ee2ad_partsAdd_5.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '56ee2ad',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_56ee2ad_4',);
                        }

                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/9311c6e')) {
                // _assetic_9311c6e
                if ($pathinfo === '/js/9311c6e.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '9311c6e',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_9311c6e',);
                }

                if (0 === strpos($pathinfo, '/js/9311c6e_')) {
                    // _assetic_9311c6e_0
                    if ($pathinfo === '/js/9311c6e_jquery.tablesorter.min_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '9311c6e',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_9311c6e_0',);
                    }

                    // _assetic_9311c6e_1
                    if ($pathinfo === '/js/9311c6e_teacherList_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '9311c6e',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_9311c6e_1',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/2b05648')) {
                // _assetic_2b05648
                if ($pathinfo === '/js/2b05648.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '2b05648',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_2b05648',);
                }

                // _assetic_2b05648_0
                if ($pathinfo === '/js/2b05648_studentImport_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '2b05648',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_2b05648_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/1b3ff7f')) {
                // _assetic_1b3ff7f
                if ($pathinfo === '/js/1b3ff7f.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '1b3ff7f',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_1b3ff7f',);
                }

                if (0 === strpos($pathinfo, '/js/1b3ff7f_')) {
                    // _assetic_1b3ff7f_0
                    if ($pathinfo === '/js/1b3ff7f_jquery-ui_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '1b3ff7f',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_1b3ff7f_0',);
                    }

                    // _assetic_1b3ff7f_1
                    if ($pathinfo === '/js/1b3ff7f_autoTextarea_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '1b3ff7f',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_1b3ff7f_1',);
                    }

                    // _assetic_1b3ff7f_2
                    if ($pathinfo === '/js/1b3ff7f_resultStatistics_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '1b3ff7f',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_1b3ff7f_2',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/css/eae182a')) {
            // _assetic_eae182a
            if ($pathinfo === '/css/eae182a.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'eae182a',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_eae182a',);
            }

            // _assetic_eae182a_0
            if ($pathinfo === '/css/eae182a_combox_style_1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'eae182a',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_eae182a_0',);
            }

        }

        if (0 === strpos($pathinfo, '/js/8fdb248')) {
            // _assetic_8fdb248
            if ($pathinfo === '/js/8fdb248.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '8fdb248',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_8fdb248',);
            }

            if (0 === strpos($pathinfo, '/js/8fdb248_')) {
                // _assetic_8fdb248_0
                if ($pathinfo === '/js/8fdb248_jquery-ui_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '8fdb248',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_8fdb248_0',);
                }

                if (0 === strpos($pathinfo, '/js/8fdb248_a')) {
                    // _assetic_8fdb248_1
                    if ($pathinfo === '/js/8fdb248_autoTextarea_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '8fdb248',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_8fdb248_1',);
                    }

                    // _assetic_8fdb248_2
                    if ($pathinfo === '/js/8fdb248_ajaxfileupload_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '8fdb248',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_8fdb248_2',);
                    }

                }

                // _assetic_8fdb248_3
                if ($pathinfo === '/js/8fdb248_jquery.combox_4.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '8fdb248',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_8fdb248_3',);
                }

                // _assetic_8fdb248_4
                if ($pathinfo === '/js/8fdb248_questionsAdd_5.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '8fdb248',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_8fdb248_4',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css/80e9988')) {
            // _assetic_80e9988
            if ($pathinfo === '/css/80e9988.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '80e9988',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_80e9988',);
            }

            if (0 === strpos($pathinfo, '/css/80e9988_')) {
                // _assetic_80e9988_0
                if ($pathinfo === '/css/80e9988_theme.blue_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '80e9988',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_80e9988_0',);
                }

                // _assetic_80e9988_1
                if ($pathinfo === '/css/80e9988_admin_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '80e9988',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_80e9988_1',);
                }

                // _assetic_80e9988_2
                if ($pathinfo === '/css/80e9988_jquery-ui.min_3.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '80e9988',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_80e9988_2',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/4a79d0b')) {
                // _assetic_4a79d0b
                if ($pathinfo === '/js/4a79d0b.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '4a79d0b',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_4a79d0b',);
                }

                // _assetic_4a79d0b_0
                if ($pathinfo === '/js/4a79d0b_admin_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '4a79d0b',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_4a79d0b_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/f4464f9')) {
                // _assetic_f4464f9
                if ($pathinfo === '/js/f4464f9.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'f4464f9',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_f4464f9',);
                }

                // _assetic_f4464f9_0
                if ($pathinfo === '/js/f4464f9_studentLogin_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'f4464f9',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_f4464f9_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/724e83e')) {
                // _assetic_724e83e
                if ($pathinfo === '/js/724e83e.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '724e83e',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_724e83e',);
                }

                if (0 === strpos($pathinfo, '/js/724e83e_')) {
                    // _assetic_724e83e_0
                    if ($pathinfo === '/js/724e83e_jquery-ui_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '724e83e',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_724e83e_0',);
                    }

                    // _assetic_724e83e_1
                    if ($pathinfo === '/js/724e83e_autoTextarea_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '724e83e',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_724e83e_1',);
                    }

                    // _assetic_724e83e_2
                    if ($pathinfo === '/js/724e83e_exam_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '724e83e',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_724e83e_2',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/b01d4ca')) {
                // _assetic_b01d4ca
                if ($pathinfo === '/js/b01d4ca.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'b01d4ca',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_b01d4ca',);
                }

                // _assetic_b01d4ca_0
                if ($pathinfo === '/js/b01d4ca_examPrepare_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'b01d4ca',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_b01d4ca_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css/6389dc5')) {
            // _assetic_6389dc5
            if ($pathinfo === '/css/6389dc5.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '6389dc5',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_6389dc5',);
            }

            if (0 === strpos($pathinfo, '/css/6389dc5_')) {
                if (0 === strpos($pathinfo, '/css/6389dc5_b')) {
                    if (0 === strpos($pathinfo, '/css/6389dc5_bootstrap')) {
                        // _assetic_6389dc5_0
                        if ($pathinfo === '/css/6389dc5_bootstrap_1.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '6389dc5',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_6389dc5_0',);
                        }

                        // _assetic_6389dc5_1
                        if ($pathinfo === '/css/6389dc5_bootstrap-theme.min_2.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '6389dc5',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_6389dc5_1',);
                        }

                    }

                    // _assetic_6389dc5_2
                    if ($pathinfo === '/css/6389dc5_button_3.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '6389dc5',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_6389dc5_2',);
                    }

                }

                // _assetic_6389dc5_3
                if ($pathinfo === '/css/6389dc5_menu_4.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '6389dc5',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_6389dc5_3',);
                }

                // _assetic_6389dc5_4
                if ($pathinfo === '/css/6389dc5_style_5.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '6389dc5',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_6389dc5_4',);
                }

                // _assetic_6389dc5_5
                if ($pathinfo === '/css/6389dc5_theme.blue_6.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '6389dc5',  'pos' => 5,  '_format' => 'css',  '_route' => '_assetic_6389dc5_5',);
                }

                // _assetic_6389dc5_6
                if ($pathinfo === '/css/6389dc5_admin_7.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '6389dc5',  'pos' => 6,  '_format' => 'css',  '_route' => '_assetic_6389dc5_6',);
                }

                // _assetic_6389dc5_7
                if ($pathinfo === '/css/6389dc5_jquery-ui.min_8.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '6389dc5',  'pos' => 7,  '_format' => 'css',  '_route' => '_assetic_6389dc5_7',);
                }

                // _assetic_6389dc5_8
                if ($pathinfo === '/css/6389dc5_student_9.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '6389dc5',  'pos' => 8,  '_format' => 'css',  '_route' => '_assetic_6389dc5_8',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/1345a8a')) {
            // _assetic_1345a8a
            if ($pathinfo === '/js/1345a8a.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '1345a8a',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_1345a8a',);
            }

            if (0 === strpos($pathinfo, '/js/1345a8a_')) {
                // _assetic_1345a8a_0
                if ($pathinfo === '/js/1345a8a_jquery-1.9.1_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '1345a8a',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_1345a8a_0',);
                }

                // _assetic_1345a8a_1
                if ($pathinfo === '/js/1345a8a_bootstrap_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '1345a8a',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_1345a8a_1',);
                }

                // _assetic_1345a8a_2
                if ($pathinfo === '/js/1345a8a_admin_3.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '1345a8a',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_1345a8a_2',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css/2cc54c9')) {
            // _assetic_2cc54c9
            if ($pathinfo === '/css/2cc54c9.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '2cc54c9',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_2cc54c9',);
            }

            if (0 === strpos($pathinfo, '/css/2cc54c9_')) {
                if (0 === strpos($pathinfo, '/css/2cc54c9_b')) {
                    if (0 === strpos($pathinfo, '/css/2cc54c9_bootstrap')) {
                        // _assetic_2cc54c9_0
                        if ($pathinfo === '/css/2cc54c9_bootstrap_1.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '2cc54c9',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_2cc54c9_0',);
                        }

                        // _assetic_2cc54c9_1
                        if ($pathinfo === '/css/2cc54c9_bootstrap-theme.min_2.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '2cc54c9',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_2cc54c9_1',);
                        }

                    }

                    // _assetic_2cc54c9_2
                    if ($pathinfo === '/css/2cc54c9_button_3.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '2cc54c9',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_2cc54c9_2',);
                    }

                }

                // _assetic_2cc54c9_3
                if ($pathinfo === '/css/2cc54c9_menu_4.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '2cc54c9',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_2cc54c9_3',);
                }

                // _assetic_2cc54c9_4
                if ($pathinfo === '/css/2cc54c9_style_5.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '2cc54c9',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_2cc54c9_4',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/d708961')) {
            // _assetic_d708961
            if ($pathinfo === '/js/d708961.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'd708961',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_d708961',);
            }

            if (0 === strpos($pathinfo, '/js/d708961_')) {
                // _assetic_d708961_0
                if ($pathinfo === '/js/d708961_jquery-1.9.1_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd708961',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_d708961_0',);
                }

                // _assetic_d708961_1
                if ($pathinfo === '/js/d708961_bootstrap_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd708961',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_d708961_1',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            // registration
            if ($pathinfo === '/register') {
                return array (  '_controller' => 'OnlineTest\\AdminBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'registration',);
            }

            // resetting
            if ($pathinfo === '/resetting') {
                return array (  '_controller' => 'OnlineTest\\AdminBundle\\Controller\\ResettingController::requestAction',  '_route' => 'resetting',);
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            // login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // admin_homepage
            if ($pathinfo === '/admin/homepage') {
                return array (  '_controller' => 'OnlineTest\\AdminBundle\\Controller\\AdminController::indexAction',  '_route' => 'admin_homepage',);
            }

            // admin_changePassword
            if ($pathinfo === '/admin/changePassword') {
                return array (  '_controller' => 'OnlineTest\\AdminBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'admin_changePassword',);
            }

            // admin_showInfo
            if ($pathinfo === '/admin/showInfo') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'admin_showInfo',);
            }

            // admin_changeInfo
            if ($pathinfo === '/admin/changeInfo') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'admin_changeInfo',);
            }

            // teacher_activation
            if ($pathinfo === '/admin/teacher_activation') {
                return array (  '_controller' => 'OnlineTest\\AdminBundle\\Controller\\AdminController::teacherActivationAction',  '_route' => 'teacher_activation',);
            }

            if (0 === strpos($pathinfo, '/admin/delete_')) {
                // delete_teacher
                if (0 === strpos($pathinfo, '/admin/delete_teacher') && preg_match('#^/admin/delete_teacher/(?P<username>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_teacher')), array (  '_controller' => 'OnlineTest\\AdminBundle\\Controller\\AdminController::deleteTeacherAction',));
                }

                // delete_selectedTeachers
                if ($pathinfo === '/admin/delete_selectedTeachers') {
                    return array (  '_controller' => 'OnlineTest\\AdminBundle\\Controller\\AdminController::deleteSelectedTeachersAction',  '_route' => 'delete_selectedTeachers',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/active')) {
                // active_teacher
                if (0 === strpos($pathinfo, '/admin/activeTeacher') && preg_match('#^/admin/activeTeacher/(?P<username>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'active_teacher')), array (  '_controller' => 'OnlineTest\\AdminBundle\\Controller\\AdminController::activeTeacherAction',));
                }

                // active_selectedTeachers
                if ($pathinfo === '/admin/active_selectedTeachers') {
                    return array (  '_controller' => 'OnlineTest\\AdminBundle\\Controller\\AdminController::activeSelectedTeachersAction',  '_route' => 'active_selectedTeachers',);
                }

            }

            // teacher_list
            if ($pathinfo === '/admin/teacher_list') {
                return array (  '_controller' => 'OnlineTest\\AdminBundle\\Controller\\AdminController::teacherListAction',  '_route' => 'teacher_list',);
            }

            if (0 === strpos($pathinfo, '/admin/deactive')) {
                // deactive_teacher
                if (0 === strpos($pathinfo, '/admin/deactiveTeacher') && preg_match('#^/admin/deactiveTeacher/(?P<username>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'deactive_teacher')), array (  '_controller' => 'OnlineTest\\AdminBundle\\Controller\\AdminController::deactiveTeacherAction',));
                }

                // deactive_selectedTeachers
                if ($pathinfo === '/admin/deactive_selectedTeachers') {
                    return array (  '_controller' => 'OnlineTest\\AdminBundle\\Controller\\AdminController::deactiveSelectedTeachersAction',  '_route' => 'deactive_selectedTeachers',);
                }

            }

            // add_student
            if ($pathinfo === '/admin/add_student') {
                return array (  '_controller' => 'OnlineTest\\AdminBundle\\Controller\\StudentManagementController::addStudentAction',  '_route' => 'add_student',);
            }

            // import_student
            if ($pathinfo === '/admin/import_student') {
                return array (  '_controller' => 'OnlineTest\\AdminBundle\\Controller\\StudentManagementController::importStudentAction',  '_route' => 'import_student',);
            }

            if (0 === strpos($pathinfo, '/admin/student_')) {
                // student_profile
                if ($pathinfo === '/admin/student_profile') {
                    return array (  '_controller' => 'OnlineTest\\AdminBundle\\Controller\\StudentManagementController::studentProflieAction',  '_route' => 'student_profile',);
                }

                // student_list
                if ($pathinfo === '/admin/student_list') {
                    return array (  '_controller' => 'OnlineTest\\AdminBundle\\Controller\\StudentManagementController::studentListAction',  '_route' => 'student_list',);
                }

                // student_validation
                if (0 === strpos($pathinfo, '/admin/student_validation') && preg_match('#^/admin/student_validation/(?P<validation_option>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'student_validation')), array (  '_controller' => 'OnlineTest\\AdminBundle\\Controller\\StudentManagementController::studentValidationAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/delete_s')) {
                // delete_student
                if (0 === strpos($pathinfo, '/admin/delete_student') && preg_match('#^/admin/delete_student/(?P<examName>[^/]++)/(?P<username>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_student')), array (  '_controller' => 'OnlineTest\\AdminBundle\\Controller\\StudentManagementController::deleteStudentAction',));
                }

                // delete_selectedStudents
                if (0 === strpos($pathinfo, '/admin/delete_selectedStudents') && preg_match('#^/admin/delete_selectedStudents/(?P<examName>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_selectedStudents')), array (  '_controller' => 'OnlineTest\\AdminBundle\\Controller\\StudentManagementController::deleteSelectedStudentsAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/update_s')) {
                // update_student
                if ($pathinfo === '/admin/update_student') {
                    return array (  '_controller' => 'OnlineTest\\AdminBundle\\Controller\\StudentManagementController::updateStudentAction',  '_route' => 'update_student',);
                }

                // update_selectedStudents
                if ($pathinfo === '/admin/update_selectedStudents') {
                    return array (  '_controller' => 'OnlineTest\\AdminBundle\\Controller\\StudentManagementController::updateSelectedStudentsAction',  '_route' => 'update_selectedStudents',);
                }

            }

            // exam_list
            if ($pathinfo === '/admin/exam_list') {
                return array (  '_controller' => 'OnlineTest\\AdminBundle\\Controller\\ExamManagementController::examListAction',  '_route' => 'exam_list',);
            }

            // add_exam
            if ($pathinfo === '/admin/add_exam') {
                return array (  '_controller' => 'OnlineTest\\AdminBundle\\Controller\\ExamManagementController::addExamAction',  '_route' => 'add_exam',);
            }

            if (0 === strpos($pathinfo, '/admin/end_')) {
                // end_exam
                if (0 === strpos($pathinfo, '/admin/end_exam') && preg_match('#^/admin/end_exam/(?P<examId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'end_exam')), array (  '_controller' => 'OnlineTest\\AdminBundle\\Controller\\ExamManagementController::endExamAction',));
                }

                // end_selectedExams
                if ($pathinfo === '/admin/end_selectedExams') {
                    return array (  '_controller' => 'OnlineTest\\AdminBundle\\Controller\\ExamManagementController::endSelectedExamsAction',  '_route' => 'end_selectedExams',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/restart_')) {
                // restart_exam
                if (0 === strpos($pathinfo, '/admin/restart_exam') && preg_match('#^/admin/restart_exam/(?P<examId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'restart_exam')), array (  '_controller' => 'OnlineTest\\AdminBundle\\Controller\\ExamManagementController::restartExamAction',));
                }

                // restart_selectedExams
                if ($pathinfo === '/admin/restart_selectedExams') {
                    return array (  '_controller' => 'OnlineTest\\AdminBundle\\Controller\\ExamManagementController::restartSelectedExamsAction',  '_route' => 'restart_selectedExams',);
                }

            }

            // paper_list
            if (0 === strpos($pathinfo, '/admin/paper_list') && preg_match('#^/admin/paper_list(?:/(?P<examId>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'paper_list')), array (  '_controller' => 'OnlineTest\\AdminBundle\\Controller\\ExamManagementController::paperListAction',  'examId' => 0,));
            }

            // add_paper
            if ($pathinfo === '/admin/add_paper') {
                return array (  '_controller' => 'OnlineTest\\AdminBundle\\Controller\\ExamManagementController::addPaperAction',  '_route' => 'add_paper',);
            }

            // delete_paper
            if (0 === strpos($pathinfo, '/admin/delete_paper') && preg_match('#^/admin/delete_paper/(?P<paperId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_paper')), array (  '_controller' => 'OnlineTest\\AdminBundle\\Controller\\ExamManagementController::deletePaperAction',));
            }

            // update_paper
            if ($pathinfo === '/admin/update_paper') {
                return array (  '_controller' => 'OnlineTest\\AdminBundle\\Controller\\ExamManagementController::updatePaperAction',  '_route' => 'update_paper',);
            }

            // delete_selectedPapers
            if ($pathinfo === '/admin/delete_selectedPapers') {
                return array (  '_controller' => 'OnlineTest\\AdminBundle\\Controller\\ExamManagementController::deleteSelectedPapersAction',  '_route' => 'delete_selectedPapers',);
            }

            // exam_validation
            if (0 === strpos($pathinfo, '/admin/exam_validation') && preg_match('#^/admin/exam_validation/(?P<validation_option>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'exam_validation')), array (  '_controller' => 'OnlineTest\\AdminBundle\\Controller\\ExamManagementController::examValidationAction',));
            }

            // get_examNameOptions
            if ($pathinfo === '/admin/get_examNameOptions') {
                return array (  '_controller' => 'OnlineTest\\AdminBundle\\Controller\\ExamManagementController::getExamNameOptionsAction',  '_route' => 'get_examNameOptions',);
            }

            if (0 === strpos($pathinfo, '/admin/add_')) {
                if (0 === strpos($pathinfo, '/admin/add_part')) {
                    // add_parts
                    if (0 === strpos($pathinfo, '/admin/add_parts') && preg_match('#^/admin/add_parts/(?P<paperId>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'add_parts')), array (  '_controller' => 'OnlineTest\\AdminBundle\\Controller\\ExamManagementController::addPartsAction',));
                    }

                    // add_part
                    if (preg_match('#^/admin/add_part/(?P<paperId>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'add_part')), array (  '_controller' => 'OnlineTest\\AdminBundle\\Controller\\ExamManagementController::addPartAction',));
                    }

                }

                // add_questions
                if (0 === strpos($pathinfo, '/admin/add_questions') && preg_match('#^/admin/add_questions/(?P<examId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'add_questions')), array (  '_controller' => 'OnlineTest\\AdminBundle\\Controller\\ExamManagementController::addQuestionsAction',));
                }

            }

            // get_exam_kinds
            if ($pathinfo === '/admin/get_exam_kinds') {
                return array (  '_controller' => 'OnlineTest\\AdminBundle\\Controller\\ExamManagementController::getExamKindsAction',  '_route' => 'get_exam_kinds',);
            }

            // enable_paper
            if (0 === strpos($pathinfo, '/admin/enable_paper') && preg_match('#^/admin/enable_paper/(?P<paperId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'enable_paper')), array (  '_controller' => 'OnlineTest\\AdminBundle\\Controller\\ExamManagementController::enablePaperAction',));
            }

            // disable_paper
            if (0 === strpos($pathinfo, '/admin/disable_paper') && preg_match('#^/admin/disable_paper/(?P<paperId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'disable_paper')), array (  '_controller' => 'OnlineTest\\AdminBundle\\Controller\\ExamManagementController::disablePaperAction',));
            }

            // add_question
            if ($pathinfo === '/admin/add_question') {
                return array (  '_controller' => 'OnlineTest\\AdminBundle\\Controller\\ExamManagementController::addQuestionAction',  '_route' => 'add_question',);
            }

            // save_add
            if ($pathinfo === '/admin/save_add') {
                return array (  '_controller' => 'OnlineTest\\AdminBundle\\Controller\\ExamManagementController::saveAddAction',  '_route' => 'save_add',);
            }

            // update_question
            if ($pathinfo === '/admin/update_question') {
                return array (  '_controller' => 'OnlineTest\\AdminBundle\\Controller\\ExamManagementController::updateQuestionAction',  '_route' => 'update_question',);
            }

            // delete_question
            if ($pathinfo === '/admin/delete_question') {
                return array (  '_controller' => 'OnlineTest\\AdminBundle\\Controller\\ExamManagementController::updateQuestionAction',  '_route' => 'delete_question',);
            }

            // paper_prepared
            if ($pathinfo === '/admin/paper_prepared') {
                return array (  '_controller' => 'OnlineTest\\AdminBundle\\Controller\\ExamManagementController::paperPreparedAction',  '_route' => 'paper_prepared',);
            }

            if (0 === strpos($pathinfo, '/admin/upload_')) {
                // upload_images
                if ($pathinfo === '/admin/upload_images') {
                    return array (  '_controller' => 'OnlineTest\\AdminBundle\\Controller\\ExamManagementController::uploadImagesAction',  '_route' => 'upload_images',);
                }

                // upload_edit_images
                if ($pathinfo === '/admin/upload_edit_images') {
                    return array (  '_controller' => 'OnlineTest\\AdminBundle\\Controller\\ExamManagementController::uploadEditImagesAction',  '_route' => 'upload_edit_images',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/result_')) {
                // result_list
                if ($pathinfo === '/admin/result_list') {
                    return array (  '_controller' => 'OnlineTest\\AdminBundle\\Controller\\ResultManagementController::resultListAction',  '_route' => 'result_list',);
                }

                // result_statistics
                if (0 === strpos($pathinfo, '/admin/result_statistics') && preg_match('#^/admin/result_statistics/(?P<paperId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'result_statistics')), array (  '_controller' => 'OnlineTest\\AdminBundle\\Controller\\ResultManagementController::resultStatisticsAction',));
                }

                // result_detail
                if (0 === strpos($pathinfo, '/admin/result_detail') && preg_match('#^/admin/result_detail/(?P<paperId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'result_detail')), array (  '_controller' => 'OnlineTest\\AdminBundle\\Controller\\ResultManagementController::resultDetailAction',));
                }

            }

            // export_excel
            if (0 === strpos($pathinfo, '/admin/export_excel') && preg_match('#^/admin/export_excel/(?P<paperId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'export_excel')), array (  '_controller' => 'OnlineTest\\AdminBundle\\Controller\\ResultManagementController::exportExcelAction',));
            }

            if (0 === strpos($pathinfo, '/admin/delete_')) {
                // delete_exam_record
                if (0 === strpos($pathinfo, '/admin/delete_exam_record') && preg_match('#^/admin/delete_exam_record/(?P<recordId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_exam_record')), array (  '_controller' => 'OnlineTest\\AdminBundle\\Controller\\ResultManagementController::deleteExamRecordAction',));
                }

                // delete_selected_exam_record
                if ($pathinfo === '/admin/delete_selected_exam_record') {
                    return array (  '_controller' => 'OnlineTest\\AdminBundle\\Controller\\ResultManagementController::deleteSelectedExamRecordAction',  '_route' => 'delete_selected_exam_record',);
                }

            }

            // answers_detail
            if (0 === strpos($pathinfo, '/admin/answers_detail') && preg_match('#^/admin/answers_detail/(?P<recordId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'answers_detail')), array (  '_controller' => 'OnlineTest\\AdminBundle\\Controller\\ResultManagementController::answersDetailAction',));
            }

        }

        if (0 === strpos($pathinfo, '/student')) {
            if (0 === strpos($pathinfo, '/student/log')) {
                // student_logout
                if ($pathinfo === '/student/logout') {
                    return array('_route' => 'student_logout');
                }

                if (0 === strpos($pathinfo, '/student/login')) {
                    // student_login
                    if (preg_match('#^/student/login(?:/(?P<examId>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'student_login')), array (  '_controller' => 'OnlineTest\\MainBundle\\Controller\\SecurityController::loginAction',  'examId' => 0,));
                    }

                    // student_login_check
                    if ($pathinfo === '/student/login_check') {
                        return array('_route' => 'student_login_check');
                    }

                }

            }

            if (0 === strpos($pathinfo, '/student/exam')) {
                // exam_isRealname
                if ($pathinfo === '/student/exam/isRealname') {
                    return array (  '_controller' => 'OnlineTest\\MainBundle\\Controller\\MainController::isRealnameAction',  '_route' => 'exam_isRealname',);
                }

                // exam_prepare
                if (0 === strpos($pathinfo, '/student/exam/prepare') && preg_match('#^/student/exam/prepare/(?P<isrealname>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'exam_prepare')), array (  '_controller' => 'OnlineTest\\MainBundle\\Controller\\MainController::examPrepareAction',));
                }

                // which_paper
                if ($pathinfo === '/student/exam/which_paper') {
                    return array (  '_controller' => 'OnlineTest\\MainBundle\\Controller\\MainController::whichPaperAction',  '_route' => 'which_paper',);
                }

                // exam_paper_status
                if ($pathinfo === '/student/exam/paper_status') {
                    return array (  '_controller' => 'OnlineTest\\MainBundle\\Controller\\MainController::paperStatusAction',  '_route' => 'exam_paper_status',);
                }

                // exam_student_status
                if ($pathinfo === '/student/exam/student_status') {
                    return array (  '_controller' => 'OnlineTest\\MainBundle\\Controller\\MainController::studentStatusAction',  '_route' => 'exam_student_status',);
                }

                // exam
                if (preg_match('#^/student/exam/(?P<isrealname>[^/]++)/(?P<paperId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'exam')), array (  '_controller' => 'OnlineTest\\MainBundle\\Controller\\MainController::examAction',));
                }

                // submit_paper
                if ($pathinfo === '/student/exam/submit_paper') {
                    return array (  '_controller' => 'OnlineTest\\MainBundle\\Controller\\MainController::submitPaperAction',  '_route' => 'submit_paper',);
                }

                // examed
                if ($pathinfo === '/student/exam/examed') {
                    return array (  '_controller' => 'OnlineTest\\MainBundle\\Controller\\MainController::examedAction',  '_route' => 'examed',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'OnlineTest\\AdminBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'OnlineTest\\AdminBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'OnlineTest\\AdminBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'OnlineTest\\AdminBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'OnlineTest\\AdminBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'OnlineTest\\AdminBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'OnlineTest\\AdminBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'OnlineTest\\AdminBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'OnlineTest\\AdminBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
