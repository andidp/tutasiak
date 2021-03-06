<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'DashboardController@index');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::resource('dashboard', 'DashboardController');
Route::resource('dashboard/admin/religions', 'ReligionController');
Route::resource('dashboard/admin/announcements', 'AnnouncementController');
Route::resource('dashboard/admin/lecturers', 'LecturerController');
Route::resource('dashboard/admin/faculties', 'FacultyController');
Route::resource('dashboard/admin/days', 'DayController');
Route::resource('dashboard/admin/exam-types', 'ExamTypeController');
Route::resource('dashboard/admin/studies', 'StudyController');
Route::resource('dashboard/admin/students', 'StudentController');
Route::resource('dashboard/admin/program-studies', 'ProgramStudyController');
Route::resource('dashboard/admin/academic-registrations', 'AcademicRegistrationController');
Route::resource('dashboard/admin/courses', 'CourseController');
Route::resource('dashboard/admin/schedules', 'ScheduleController');
