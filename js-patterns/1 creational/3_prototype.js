const car = {
  wheel: 4,

  init(){
    console.log(`I have ${this.wheel} wheels, my owner is ${this.owner}`)
  }
}

const carWithOwner = Object.create(car, {
  owner: {
    value: 'Dimitry'
  }
})

carWithOwner.init()
