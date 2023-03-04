from Python.payment import Payment

class paypal(Payment):
    id=int
    email=str
    
    def __init__(self,id,email):
        super().__init__(id)
        self.email = email