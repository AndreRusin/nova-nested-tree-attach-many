Nova.booting((Vue, router, store) => {
  Vue.component(
    'detail-nova-nested-tree-attach-many',
    require('./components/DetailField').default
  )
  Vue.component(
    'form-nova-nested-tree-attach-many',
    require('./components/FormField').default
  )
})
