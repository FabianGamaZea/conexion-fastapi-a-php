from fastapi import FastAPI

app = FastAPI()

#http://127.0.0.1:8000

@app.get("/get/")
def index():
    return {"message" : "hola mundo desde python"}

@app.post("/post/")
def index():
    return {"message" : "hola mundo desde python"}

@app.get("/get/libros/{id}")
def mostrar_libro(id:int):
    return {"data" : id}
