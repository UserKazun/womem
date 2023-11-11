import axios from "axios";

const http = axios.create({
    baseURL: 'http://localhost',
    withCredentials: true,
});

class Apis {
    async getCsrfToken() {
        await http.get('/sanctum/csrf-cookie');
    }

    async login(name, password) {
        await this.getCsrfToken();
        const formData = new FormData();

        formData.append('name', name);
        formData.append('password', password);

        return await http.post('/login', formData);
    }
}

const apis = new Apis()
export default apis;
