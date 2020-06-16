var gulp        =   require('gulp'),
    sass        =   require('gulp-sass'),                   //компилятор стилей
    prefixer    =   require('gulp-autoprefixer'),           //автоматические префиксы
    cssmin      =   require('gulp-cssmin'),                 //сжатие файла стилей
    browserSync =   require('browser-sync'),                //сервер
    //concat      =   require('gulp-concat'),                 //конкатенация js файлов
    //uglify      =   require('gulp-uglify'),                 //сжатие файла скриптов
    connect     =   require('gulp-connect-php'),            //php-обработка
    rename      =   require('gulp-rename');                 //добавление суффиксов

//---------------------------------------------------------------------------------------------------------------------//

gulp.task('style:build', function () {                      //задача стилей
    return gulp.src('./sass/**/*.scss')                     //выбираем наш main.scss (исходник)
        .pipe(sass())                                       //компилируем
        .pipe(prefixer())                                   //вендорные префиксы
        .pipe(cssmin())                                     //сжимаем
        .pipe(rename({ suffix: '.min', prefix : '' })) //добавляем суффикс min
        .pipe(gulp.dest('./css/'))                          //выход готового файла стилей
        .pipe(browserSync.reload({ stream: true }))         //перезагрузка страницы при изменении файла стилей
});

//---------------------------------------------------------------------------------------------------------------------//

/*gulp.task('js:build', function () {
    return gulp.src([
        './node_modules/jquery/dist/jquery.min.js',         //включаем jquery (на данный момент последняя версия 3.4.1)
        //'./node_modules/vue/dist/vue.min.js',               //включаем Vue
        './js/main-j.js',                                   //файл со скриптами (jquery)
        //'./js/main-v.js',                                   //файл со скриптами (vue)
    ])
        .pipe(concat('scripts.js'))                    //объединяем в один файл
        .pipe(uglify())                                     //сжимаем
        .pipe(rename({ suffix: '.min', prefix : '' })) //добавляем суффикс min
        .pipe(gulp.dest('./js/'))                           //выход готового файла скриптов
        .pipe(browserSync.reload({ stream: true }))         //перезагрузка страницы при изменении файла скриптов
});*/

//---------------------------------------------------------------------------------------------------------------------//

gulp.task('php:build', function () {                        //задача изменения php
    return gulp.src('./*.php')                              //исходный файл
        .pipe(browserSync.reload({ stream: true }))         //перезагрузка страницы при изменении php-файла
});

//---------------------------------------------------------------------------------------------------------------------//

gulp.task('html:build', function () {                       //задача изменения html
    return gulp.src('./*.html')                             //исходный файл
        .pipe(browserSync.reload({ stream: true }))         //перезагрузка страницы при изменении html-файла
});

//---------------------------------------------------------------------------------------------------------------------//

gulp.task('watch', function(){                                                  //задача вотчера
    gulp.watch('./sass/**/*.scss', gulp.parallel('style:build'));               //отслеживаем изменения в файле стилей
    //gulp.watch(['./js/main-j.js'], gulp.parallel('js:build'));                  //отслеживаем изменения в файле скриптов
    gulp.watch(['./*.php'], gulp.parallel('php:build'));                        //отслеживаем изменения в файлах php
    gulp.watch(['./*.html'], gulp.parallel('html:build'));                      //отслеживаем изменения в файлах html
    // остальные вотчеры
});

//---------------------------------------------------------------------------------------------------------------------//

gulp.task('server', function() {                                                //запуск сервера
    connect.server({
        base: './'
    }, function (){
        browserSync({
            injectChanges: true,
            proxy: '127.0.0.1:8000'
        });
    });
});

//---------------------------------------------------------------------------------------------------------------------//

gulp.task('default', gulp.parallel('server','watch'));                         // задача по умолчанию (gulp)

//---------------------------------------------------------------------------------------------------------------------//