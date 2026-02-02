<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\AuthController;
use \App\Http\Controllers\TopupController;
use \App\Http\Controllers\NewsController;
// Case owner's controllers
use App\Http\Controllers\CaseOwner\AuthController as CaseOwnerAuthController;
use App\Http\Controllers\CaseOwner\CasesController as CaseOwnerCasesController;
use App\Http\Controllers\CaseOwner\DashboardController as CaseOwnerDashboardController;
use App\Http\Controllers\CaseOwner\ReviewController as CaseOwnerReviewController;
use App\Http\Controllers\CaseOwner\ProfileController;
use App\Http\Controllers\CaseOwner\CaseController;
use App\Http\Controllers\CasePublicationController;
// Talent's controllers
use App\Http\Controllers\Talent\CasesController as TalentCasesController;
use App\Http\Controllers\Talent\AuthController as TalentAuthController;
use App\Http\Controllers\Talent\DashboardController as TalentDashboardController;
use App\Http\Controllers\Talent\ProfileTalentController as ProfileTalentController;
// Reviewer's controllers
use App\Http\Controllers\Reviewer\AuthController as ReviewerAuthController;
use App\Http\Controllers\Reviewer\DashboardController as ReviewerDashboardController;

// Superadmin controllers
use App\Http\Controllers\SuperadminAuthController;
use App\Http\Controllers\SuperadminProfileController;
use App\Http\Controllers\Superadmin\NewsController as SuperadminNewsController;
use App\Http\Controllers\SuperAdmin\LogActivityController;
use App\Http\Controllers\Superadmin\ReviewerController;
use App\Http\Controllers\Superadmin\ReportReviewController;
use App\Http\Controllers\Superadmin\ReviewerReviewController;

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/homepage', [HomeController::class, 'index'])->name('homepage');
Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/contact', function () {
    return view('contactus');
})->name('contact');

Route::get('/privacy-policy', function () {
    return view('privacypolicy');
})->name('privacypolicy');

Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/detail/{id}', [NewsController::class, 'detail'])->name('news.news_details');


// Route News CRUD
Route::prefix('admin/news')->group(function () {
    Route::get('/', [NewsController::class, 'show'])->name('news.show');
    Route::get('/create', [NewsController::class, 'create'])->name('news.create');
    Route::post('/store', [NewsController::class, 'store'])->name('news.store');
    Route::get('/edit/{id}', [NewsController::class, 'edit'])->name('news.edit');
    Route::put('/update/{id}', [NewsController::class, 'update'])->name('news.update');
    Route::delete('/delete/{id}', [NewsController::class, 'destroy'])->name('news.destroy');
});

Route::get('/contact', function () {
    return view('contactus');
})->name('contact');

// GROUP ROUTE CASEOWNER
Route::prefix('caseowner')->name('caseowner.')->group(function () {
    // login
    Route::get('/login', [CaseOwnerAuthController::class, 'login'])->name('login');
    Route::post('/login', [CaseOwnerAuthController::class, 'loginPost'])->name('login.post');
    // regist
    Route::get('/register', [CaseOwnerAuthController::class, 'register'])->name('register');
    Route::post('/register', [CaseOwnerAuthController::class, 'registerPost'])->name('register.post');

    Route::middleware(['auth', 'verified'])->group(function () {
        // dashboard
        Route::get('/dashboard', [CaseOwnerDashboardController::class, 'dashboard'])->name('dashboard');
        Route::get('/case/{caseId}/proposals', [CaseOwnerCasesController::class, 'viewProposals'])->name('caseowner.proposals');
        Route::post('/proposal/{proposalId}/accept', [CaseOwnerCasesController::class, 'acceptProposal'])->name('caseowner.acceptProposal');
        // review solusi
        Route::get('/cases/{case}/review', [CaseOwnerReviewController::class, 'create'])->name('reviews.create');
        Route::post('/cases/{case}/review', [CaseOwnerReviewController::class, 'store'])->name('reviews.store');
    });
});

// PROFILE
Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::post('/profile/photo', [ProfileController::class, 'updatePhoto'])->name('profile.photo');

// Route::prefix('case')->name('case.')->group(function () {
//     Route::get('/create/step-1', [CasePublicationController::class, 'form1'])->name('form1');
//     Route::post('/create/step-1', [CasePublicationController::class, 'storeForm1'])->name('store.form1');

//     Route::get('/create/step-2', [CaseController::class, 'form2'])->name('form2');
//     Route::post('/create/step-2', [CaseController::class, 'storeForm2'])->name('store.form2');

//     Route::get('/create/step-3', [CaseController::class, 'form3'])->name('form3');
//     Route::post('/create/submit', [CaseController::class, 'submit'])->name('submit');
// });


Route::prefix('cases')->name('cases.')->group(function () {
    Route::get('/sent', fn () => view('caseowner.sent'))->name('sent');
    Route::get('/approved', fn () => view('caseowner.approved'))->name('approved');
    Route::get('/inprogress', fn () => view('caseowner.inprogress'))->name('inprogress');
    Route::get('/review', fn () => view('caseowner.review'))->name('review');
    Route::get('/solved', fn () => view('caseowner.solved'))->name('solved');
    Route::get('/rejected', fn () => view('caseowner.rejected'))->name('rejected');
    Route::get('/detail/{id}', fn ($id) => view('caseowner.detail', compact('id')))->name('detail');
});

        // REVIEW SOLUSI
// Route::get('/cases/{case}/review', [ReviewController::class, 'create'])->name('reviews.create');
// Route::post('/cases/{case}/review', [ReviewController::class, 'store'])->name('reviews.store');

Route::prefix('talent')->name('talent.')->group(function () {

    Route::get('/login', [TalentAuthController::class, 'login'])->name('login');
    Route::post('/login', [TalentAuthController::class, 'loginPost'])->name('login.post');
    // regist
    Route::get('/register', [TalentAuthController::class, 'register'])->name('register');
    Route::post('/register', [TalentAuthController::class, 'registerPost'])->name('register.post');

    Route::middleware(['auth', 'verified'])->group(function () {
        // dasboard
        Route::get('/dashboard', [TalentDashboardController::class, 'dashboard'])->name('dashboard');
        Route::get('/dashboard/case-list', [TalentDashboardController::class, 'dashboard'])->name('dashboard.case-list');
        Route::get('/dashboard/explore-case', [TalentDashboardController::class, 'dashboard'])->name('dashboard.explore-case');
        Route::get('/dashboard/solution-status', [TalentDashboardController::class, 'dashboard'])->name('dashboard.solution-status');
        // cases
        Route::get('/cases', [TalentCasesController::class, 'listAvailableCases'])->name('availableCases');
        Route::get('/cases/search', [TalentCasesController::class, 'index'])->name('index');
        Route::post('/cases/{caseId}/proposal', [TalentCasesController::class, 'submitProposal'])->name('submitProposal');

        Route::get('/projects', [TalentCasesController::class, 'myProjects'])->name('myProjects');
        // verifikasi file talent
        Route::get('/verify/file/{role}', [AuthController::class, 'verifyFileForm'])->name('verify.file');
        Route::post('/verify/file/{role}', [AuthController::class, 'submitVerifyFile'])->name('verify.file.submit');

        Route::get('/profile', [ProfileTalentController::class, 'index'])->name('profile');
        Route::post('/profile', [ProfileTalentController::class, 'store'])->name('profile.store');
        
        Route::post('/cv/upload', [ProfileTalentController::class, 'uploadCv'])->name('cv.upload');

        Route::post('/certificate/upload', [ProfileTalentController::class, 'uploadCertificate'])->name('certificate.upload');

        Route::delete('/certificate/{id}', [ProfileTalentController::class, 'deleteCertificate'])->name('certificate.delete');
    });
});

Route::prefix('reviewer')->name('reviewer.')->group(function () {
    Route::get('/login', [ReviewerAuthController::class, 'login'])->name('login');
    Route::post('/login', [ReviewerAuthController::class, 'loginPost'])->name('login.post');
    Route::get('/register', [ReviewerAuthController::class, 'register'])->name('register');
    Route::post('/register', [ReviewerAuthController::class, 'registerPost'])->name('register.post');

    Route::middleware(['auth', 'verified'])->group(function () {
        Route::get('/dashboard', [ReviewerDashboardController::class, 'index'])->name('dashboard');
    });

});

// GROUP ROUTE SUPERADMIN
Route::prefix('superadmin')
    ->name('superadmin.')
    ->group(function () {

        Route::get('/login', [SuperadminAuthController::class, 'showLogin'])
            ->name('login');

        Route::post('/login', [SuperadminAuthController::class, 'login'])
            ->name('login.post');

        Route::post('/logout', [SuperadminAuthController::class, 'logout'])
            ->name('logout');

        Route::middleware('superadmin')->group(function () {

            // DASHBOARD
            Route::get('/dashboard', [SuperadminAuthController::class, 'dashboard'])
                ->name('dashboard');

            // PROFILE
            Route::get('/profile', [SuperadminProfileController::class, 'index'])
                ->name('profile');

            // PASSWORD
            Route::get('/password/edit', [SuperadminProfileController::class, 'editPassword'])
                ->name('password.edit');

            Route::post('/password/update', [SuperadminProfileController::class, 'updatePassword'])
                ->name('password.update');

            // LOG ACTIVITY
            Route::get('/log-activity', [LogActivityController::class, 'index'])
                ->name('log-activity');

            // NEWS
            Route::get('/news', [SuperadminNewsController::class, 'index'])
                ->name('news.index');

            Route::post('/news', [SuperadminNewsController::class, 'store'])
                ->name('news.store');

            Route::put('/news/{news}', [SuperadminNewsController::class, 'update'])
                ->name('news.update');

            Route::delete('/news/{news}', [SuperadminNewsController::class, 'destroy'])
                ->name('news.destroy');
            
            // APPROVE REVIEWER
            Route::get('/review-approval', [ReviewerReviewController::class, 'index'])
                ->name('review-approval.index');

            Route::post('/review-approval/{id}/approve', [ReviewerReviewController::class, 'approve'])
                ->name('review-approval.approve');

            Route::post('/review-approval/{id}/reject', [ReviewerReviewController::class, 'reject'])
                ->name('review-approval.reject');

            // REPORT REVIEW
            Route::get('/report-review', [ReportReviewController::class, 'index'])
                ->name('report-review.index');

            Route::post('/report-review/{id}/resolve', [ReportReviewController::class, 'resolve'])
                ->name('report-review.resolve');

            Route::post('/report-review/{id}/reject', [ReportReviewController::class, 'reject'])
                ->name('report-review.reject');

            Route::put('/report-review/{id}', [ReportReviewController::class, 'update'])
                ->name('report-review.update');
        });
    });


Route::get('/privacy-policy', function () {
    return view('privacypolicy');
})->name('privacypolicy');


// Global Logout
Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/');
})->name('logout');

Route::get('/email/verify/{id}/{hash}', [AuthController::class, 'VerifyEmail'])
    ->middleware(['signed'])->name('verification.verify');
// email verification
Route::middleware('auth')->group(function () {
    // email verification notice
    Route::get('/email/verify', [AuthController::class, 'VerifyNotice'])
        ->name('verification.notice');

    // email verification handler

    // resending email verification
    Route::post('/email/verification-notification', [AuthController::class, "VerifyHandler"])
        ->middleware(['throttle:6,1'])->name('verification.send');
});

// forgot password
Route::middleware('guest')->group(function () {
    Route::view('/forgot-password', 'auth.forgot-password')
        ->name('password.request');

    Route::post('/forgot-password', [AuthController::class, "PasswordEmail"])
        ->name('password.email');

    Route::get('/reset-password/{token}', [AuthController::class, "PasswordReset"])
        ->name('password.reset');

    Route::post('/reset-password', [AuthController::class, "PasswordUpdate"])->middleware('guest')->name('password.update');
});

// sign in using google account
Route::middleware(['web'])->group(function () {
    Route::get('google/{role}', [AuthController::class, 'RedirectToGoogle'])->name('google.login');
    Route::get('auth/google-callback', [AuthController::class, 'HandleGoogleCallback']);
});

Route::post('/midtrans-callback', [TopupController::class, 'callback'])->name('token.topup.callback');
// token top-up

Route::middleware('auth')->group(function () {
    Route::get('/email/verify', [AuthController::class, 'VerifyNotice'])->name('verification.notice');
    Route::post('/email/verification-notification', [AuthController::class, 'VerifyHandler'])
        ->middleware(['throttle:6,1'])->name('verification.send');
});

Route::middleware('guest')->group(function () {
    Route::view('/forgot-password', 'auth.forgot-password')->name('password.request');
    Route::post('/forgot-password', [AuthController::class, 'PasswordEmail'])->name('password.email');
    Route::get('/reset-password/{token}', [AuthController::class, 'PasswordReset'])->name('password.reset');
    Route::post('/reset-password', [AuthController::class, 'PasswordUpdate'])->name('password.update');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/topup', [TopupController::class, 'showForm'])->name('token.topup.form');
    Route::post('/topup', [TopupController::class, 'checkout'])->name('token.topup.checkout');
    Route::get('/payment-success', [TopupController::class, 'success'])->name('token.topup.success');
});