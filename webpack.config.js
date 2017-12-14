    const path = require('path');    
    
    module.exports = {
        entry : {
            jquery      : "./vendor/components/jquery/jquery.min.js",
            bootstrap   : "./vendor/twbs/bootstrap/dist/js/bootstrap.min.js"
        },
        output : {
            path: path.resolve(__dirname, 'view/js'),
            filename : "[name].js"
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