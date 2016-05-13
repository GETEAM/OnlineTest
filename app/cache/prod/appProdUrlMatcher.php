<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
