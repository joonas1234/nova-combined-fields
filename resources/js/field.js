Nova.booting((Vue, router, store) => {
    Vue.component('index-nova-combined-fields', require('./components/IndexField'))
    Vue.component('detail-nova-combined-fields', require('./components/DetailField'))
    Vue.component('detail-nova-combined-fields-group', require('./components/DetailGroup'))
    Vue.component('form-nova-combined-fields', require('./components/FormField'))
    Vue.component('form-nova-combined-fields-group', require('./components/FormGroup'))
})
