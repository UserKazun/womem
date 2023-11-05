const http = axios.create({
    baseURL: 'http://localhost',
    withCredentials: true,
});

function getCsrfToken() {
    http.get('/sanctum/csrf-cookie').then(r => {});
}

export const login = (name, password) => {
    getCsrfToken();

    return http.post('/login', {name, password});
};
