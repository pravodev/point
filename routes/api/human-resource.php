<?php

Route::prefix('human-resource')->namespace('HumanResource')->group(function () {
    Route::prefix('kpi')->namespace('Kpi')->group(function () {
        Route::apiResource('templates', 'KpiTemplateController');
        Route::apiResource('template-groups', 'KpiTemplateGroupController');
        Route::apiResource('template-indicators', 'KpiTemplateIndicatorController');
        Route::apiResource('scores', 'KpiScoreController');
        Route::apiResource('score-details', 'KpiScoreDetailController');
        Route::apiResource('results', 'KpiResultController');
        Route::apiResource('categories', 'KpiCategoryController');
        Route::apiResource('groups', 'KpiGroupController');
        Route::apiResource('kpis', 'KpiController');
    });
});