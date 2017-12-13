    module.exports = {
        entry : "./vendor/components/jquery/jquery.min.js",
        output : {
            "filename" : "./view/js/bundle.js"
        },
        module : {
            rules : [
                {
                    test: /\.css$/,
                    use: [
                        { loader: 'style-loader' },
                        { loader: 'css-loader' }
                    ]
                },
                {
                    test: /\.js$/,
                    use: [
                        {
                            loader: 'babel-loader',
                            options: {
                                presets: ['env']
                            }
                        }
                    ]
                }
            ]
        }
    };