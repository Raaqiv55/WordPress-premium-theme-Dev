// let gulp = require('gulp');

// import gulp from 'gulp';
// gulp.task('default', defaultTask);

// function defaultTask(cb) {
//     console.log('hey');
//     // place code for your default task here
//     cb();
//   }
  
//   exports.default = defaultTask

//   gulp.task('hello', function(cb){
//       console.log('hello');
//     cb();
//   })
import gulp from 'gulp';
  
function defaultTask(cb) {
  // place code for your default task here
  console.log('Heyy');
  cb();
}
export const hello = (done) => {
  console.log('hello');
  done();
}


exports.default = (defaultTask, hello)

