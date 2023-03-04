from Python.payment import Payment

class cash(Payment):
    id =int
    
    def __init__(self,id):
        super().__init__(id)