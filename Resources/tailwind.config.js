/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: "class",
    content: [
        '../../../Public/Themes/Tailwind/**/*.{php,html,js}',
        './node_modules/flowbite/**/*.js'
    ],
    theme: {
        extend: {
            fontFamily: {
                'angkor': ['angkor'],
                'ibmplexsans': ['ibmplexsans'],
                'kanit': ['kanit'],
                'lora': ['lora'],
                'madimione': ['madimione'],
                'ojuju': ['ojuju'],
                'opensans': ['opensans'],
                'playfairdisplay': ['playfairdisplay'],
                'robotocondensed': ['robotocondensed'],
                'robotomono': ['robotomono'],
                'robotoslab': ['robotoslab'],
                'rubik': ['rubik'],
                'ubuntu': ['ubuntu'],
                'roboto': ['roboto'],
                'unbounded': ['unbounded'],
                'montserrat': ['montserrat'],
                'paytone': ['paytone'],
                'sora': ['sora'],
                'outfit': ['outfit'],
                'alata': ['alata'],
                'titan': ['titan'],
                'pressstart': ['pressstart'],

                'abrilfatface': ['abrilfatface'],
                'afacadflux': ['afacadflux'],
                'amaticsc': ['amaticsc'],
                'archivo': ['archivo'],
                'cabin': ['cabin'],
                'caveat': ['caveat'],
                'concretone': ['concretone'],
                'crimsonpro': ['crimsonpro'],
                'exo2': ['exo2'],
                'lato': ['lato'],
                'lobster': ['lobster'],
                'marcellus': ['marcellus'],
                'merriweather': ['merriweather'],
                'noto': ['noto'],
                'oleo': ['oleo'],
                'playwriteausa': ['playwriteausa'],
                'playwrite': ['playwrite'],
                'pt': ['pt'],
                'quicksand': ['quicksand'],
                'satisfy': ['satisfy'],
                'silkscreen': ['silkscreen'],
            },
        },
    },
    plugins: [
        require('flowbite/plugin')
    ],
}
