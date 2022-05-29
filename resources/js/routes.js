import Logo from './components/Logo.vue'
import LogoSymbol from './components/LogoSymbol.vue'
import Colors from './components/Colors.vue'
import Typography from './components/Typography.vue'
import Mascot from './components/Mascot.vue'
import Illustrations from './components/Illustrations.vue'
import Wallpapers from './components/Wallpapers.vue'
import NotFound from './components/NotFound.vue'
import SiteStats from './components/SiteStats.vue'
import Achievements from './components/Achievements.vue'

let LoadersAndAnimations = () => import('./components/LoadersAndAnimations.vue');



export default {
    mode: 'history',

    linkActiveClass: 'font-bold',

    routes: [

        {
            path: '*',
            component: NotFound
        },

        {
            path: '/',
            component: Logo
        },

        {
            path: '/logo-symbol',
            component: LogoSymbol
        },

        {
            path: '/colors',
            component: Colors
        },

        {
            path: '/typography',
            component: Typography
        },

        {
            path: '/mascot',
            component: Mascot
        },

        {
            path: '/illustrations',
            component: Illustrations
        },

        {
            path: '/loaders-and-animations',
            component: LoadersAndAnimations
        },

        {
            path: '/wallpapers',
            component: Wallpapers
        },

        {
            path: '/site-stats',
            component: SiteStats
        },
        {
            path: '/achievements',
            component: Achievements
        }
    ]
}