describe('Authentication Test', () => {
    beforeEach(() => {
        cy.refreshDatabase().seed();
    });

    it('Provides feedback for invalid email', () => {
        cy.visit('/login');
        cy.get('#email').type('asdf@gmail.com');
        cy.get('#password').type('password');
        cy.contains('button', 'Log In').click();
        cy.contains('Your provieded email could not be verified.');
    });

    it('Valid login', () => {
        cy.visit('/login');
        cy.get('#email').type('user@gmail.com');
        cy.get('#password').type('password');
        cy.contains('button', 'Log In').click();
    });
});
