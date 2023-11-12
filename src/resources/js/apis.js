import axios from "axios";

const baseURL = 'http://localhost';

const http = axios.create({
    baseURL: baseURL,
    withCredentials: true,
});

class Apis {
    constructor() {
        this.isAuthenticated = false;
        this.user = null;
    }

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

    async getMe() {
        try {
            const response = await http.get('/api/me');
            const user = response.data;

            this.isAuthenticated = true;
            this.user = user;

            //return user;
        } catch (e) {
            console.error("Authentication error: ", e);
            throw e;
        }
    }
}

const apis = new Apis();
export default apis;
