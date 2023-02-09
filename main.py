from fastapi import FastAPI

app = FastAPI()

#http://127.0.0.1:8000

@app.get("/")
def index():
    return {"message" : "hola mundo"}

@app.get("/libros/{id}")
def mostrar_libro(id:int):
    return {"data" : id}
