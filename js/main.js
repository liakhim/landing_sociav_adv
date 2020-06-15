

var app = new Vue({
    el: '#app',
    data: {
        counter: 1,
        loaderShow: true,
        activeColors: ['','#f89c24','#00c493','#33a5e8','#d13030','#d22bd8'],
        modalActive: false,
        modalActivePhone: false,
        message2: "",
        counter2: false,
        interval: null,
        currentTime: 0,
        timer: null,
    },
    methods:{
        changeSlide: function(arg) {
            if (arg === 'plus') {
                this.counter === 5 ? this.counter = 1 : this.counter += 1;
                this.loaderShow = !this.loaderShow;
                this.currentTime = 0;
                console.log(this.counter);
            } else {
                this.counter === 1 ? this.counter = 5 : this.counter -= 1;
                this.loaderShow = !this.loaderShow;
                this.currentTime = 0;
                console.log(this.counter);
            }
        },
        startTimer() {
            this.timer = setInterval(() => {
                this.currentTime++;
                if (this.currentTime === 9) {
                    this.counter++;
                    this.currentTime = -1;
                    this.loaderShow = !this.loaderShow;
                }
            }, 1000)
        },
        stopTimer() {
            clearTimeout(this.timer)
        },
        watch: {
            currentTime(time) {
                if (time === 10) {
                    this.stopTimer()
                }
            }
        },
    },
    mounted() {
        this.startTimer()
    },
    destroyed() {
        this.stopTimer()
    },
});
