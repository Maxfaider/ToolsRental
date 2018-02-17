class Request {
    constructor(uri, method) {
        this.http = new XMLHttpRequest();
        this.http.open(method, uri, true);

        if (method == 'POST')
            this.http.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    }

    getHttp() {
        return this.http;
    }

}
