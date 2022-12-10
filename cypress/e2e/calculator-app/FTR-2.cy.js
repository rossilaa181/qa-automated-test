describe('factorial-calculator app', () => {
  beforeEach(() => {
    // Cypress starts out with a blank slate for each test
    // so we must tell it to visit our website with the `cy.visit()` command.
    // Since we want to visit the same URL at the start of all our tests,
    // we include it in our beforeEach function so that it runs before each test
    cy.visit('https://qa.putraprima.id/')
  })  

  context('input test', () => {
    beforeEach(() => {      
      // Since we want to perform multiple tests that start with checking
      // one element, we put it in the beforeEach hook
      // so that it runs at the start of every test.
     cy.get('#input').should('have.attr', 'placeholder', 'Masukkan Angka')
     cy.get('#input').clear()      
    })

    // TC-001
    it('Enter a blank input in the input field', () => {     
      cy.get('#input').eq(0).type(' ')
      cy.get('#hitung').contains('Hitung Faktorial').should('be.visible').eq(0)
      .click({ force: true });
      cy.get('#result').contains('Please enter an integer')      
      cy.pause()
    })    

    // TC-002
    it('Enter an integer in the input field', () => {      
      cy.get('#input').eq(0).type(12)
      cy.get('#hitung').contains('Hitung Faktorial').should('be.visible').eq(0)
      .click({ force: true });
      cy.get('#result').contains('Faktorial dari 12 adalah:')
      cy.pause()
    })

    // TC-003
    it('Enter a 3-digit integer less than 170 in the input field', () => {      
      cy.get('#input').eq(0).type(169)
      cy.get('#hitung').contains('Hitung Faktorial').should('be.visible').eq(0)
      .click({ force: true });
      cy.get('#result').contains('Faktorial dari 169 adalah:')      
      cy.pause()
    })

    // TC-004
    it('Enter a 3 digit integer equal to 170 in the input field', () => {      
      cy.get('#input').eq(0).type(170)
      cy.get('#hitung').contains('Hitung Faktorial').should('be.visible').eq(0)
      .click({ force: true });
      cy.get('#result').contains('Faktorial dari 170 adalah:')      
      cy.pause()
    })

    // TC-005
    it('Enter a 3 digit integer more than 170 in the input field', () => {      
      cy.get('#input').eq(0).type(999)
      cy.get('#hitung').contains('Hitung Faktorial').should('be.visible').eq(0)
      .click({ force: true });      
      cy.pause()
    })

    // TC-006
    it('Enter a negative integer in the input field', () => {      
      cy.get('#input').eq(0).type('-99')
      cy.get('#hitung').contains('Hitung Faktorial').should('be.visible').eq(0)
      .click({ force: true }); 
      cy.get('#result').contains('Faktorial dari -99 adalah:')     
      cy.pause()
    })

    // TC-007
    it('Enter an float in the input field', () => {      
      cy.get('#input').eq(0).type(7.7)
      cy.get('#hitung').contains('Hitung Faktorial').should('be.visible').eq(0)
      .click({ force: true });   
      cy.get('#result').contains('Please enter an integer')   
      cy.pause()
    })

    // TC-008
    it('Enter an string in the input field', () => {      
      cy.get('#input').eq(0).type('rosi')
      cy.get('#hitung').contains('Hitung Faktorial').should('be.visible').eq(0)
      .click({ force: true });
      cy.get('#result').contains('Please enter an integer')
      cy.pause()
    })    

    // TC-009
    it('Enter an special character in the input field', () => {      
      cy.get('#input').eq(0).type('%!&/')
      cy.get('#hitung').contains('Hitung Faktorial').should('be.visible').eq(0)
      .click({ force: true });
      cy.get('#result').contains('Please enter an integer')
      cy.pause()
    })
  })
})
