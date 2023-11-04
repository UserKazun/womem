const http = axios.create({
    baseURL: 'http://localhost',
    withCredentials: true,
});

export const login = (name, password) => {
    http.get('/sanctum/csrf-cookie').then((res) => {
        http.post('/login', {name, password}).then((res) => {
            console.log(res);
        });
    });

};
