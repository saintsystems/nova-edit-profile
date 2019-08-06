Nova.booting((Vue, router) => {
    router.addRoutes([
        {
            name: 'nova-edit-profile',
            path: '/edit-profile',
            component: require('./components/Tool'),
        },
    ])
})
