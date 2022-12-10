describe('factorial-calculator app', () => {
  beforeEach(() => {
    // Cypress starts out with a blank slate for each test
    // so we must tell it to visit our website with the `cy.visit()` command.
    // Since we want to visit the same URL at the start of all our tests,
    // we include it in our beforeEach function so that it runs before each test
    cy.visit('https://qa.putraprima.id/')
  })

  it('displays form input calculate by default', () => {
    cy.get('.card-header').should('have.length', 1)
    cy.get('.card-header').should('have.text', 'Kalkulator Faktorial')

    cy.get('#input').should('have.attr', 'placeholder', 'Masukkan Angka')

    cy.get('.col-md-6 > :nth-child(2) > :nth-child(1)').should('have.text',  ' Terms Of Service')
    cy.get('.col-md-6 > :nth-child(2) > :nth-child(2)').should('have.text', ' Privacy Policy')
    
    cy.get('#hitung').contains('Hitung Faktorial').should('be.visible').eq(0)
      .click({ force: true });
  })
})
