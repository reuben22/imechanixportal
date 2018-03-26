import axios from 'axios';
import config from '../../config'
import router from '../../router'

export const types = {
    LOGIN: 'LOGIN',
    LOGOUT: 'LOGOUT'
}

export const state = {
    logged: localStorage.getItem('token')
}

export const getters = {
    isLogged: state => state.logged
}

export const actions = {
    login ({commit}, credentials) {
        console.log(config);
        /*Vue.http.post('http://127.0.0.1:8000/api/user/signin', credential)
            .then((response) => response.json())
            .then((result) => {
                localStorage.setItem('token', result.token);
                commit(types.LOGIN);
                router.push({path: '/categories'});
            });*/

        axios.post(config.api.auth + '/portal-login', credentials)
        .then((resp) =>{
            console.log(resp);
            localStorage.setItem('token', resp.data.access_token);
            commit(types.LOGIN);
            router.push({path: '/'});
        });
    },

    logout({commit}) {
        Vue.http.get('http://127.0.0.1:8000/api/user/logout')
            .then((response) => response.json())
            .then(() => {
                localStorage.removeItem('token');
                commit(types.LOGOUT);
                router.push({path: '/login'});
            });
    }
}

export const mutations = {
    [types.LOGIN] (state) {
        state.logged = 1;
    },

    [types.LOGOUT] (state) {
        state.logged = 0;
    }
}

/*export default new Vuex.Store({
    state,
    getters,
    actions,
    mutations
})*/