describe('Authentication Test', () => {
    before(() => {
        cy.refreshDatabase().seed();
    });

    it('Provides feedback for invalid email', () => {
        cy.visit('/login');
        cy.get('#email').type('asdf@gmail.com');
        cy.get('#password').type('password');
        cy.contains('button', 'Log In').click();
        cy.contains('Your provieded credentials could not be verified.');
    });

    it('Provides feedback for invalid password', () => {
        cy.visit('/login');
        cy.get('#email').type('user@gmail.com');
        cy.get('#password').type('invalidPassword');
        cy.contains('button', 'Log In').click();
    });

    it('Valid login', () => {
        cy.visit('/login');
        cy.get('#email').type('user@gmail.com');
        cy.get('#password').type('password');
        cy.contains('button', 'Log In').click();
    });
});
