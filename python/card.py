from Python.payment import Payment

class Card(Payment):
    id=int
    cardName =str
    cardNumber =str
    cardType =str
    
    def __init__(self,id,cardName,cardNumber,cardType):
        super().__init__(id)
        self.cardName = cardName
        self.cardNumber = cardNumber
        self.cardType = cardType