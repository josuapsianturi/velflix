describe('Registration', () => {
    before(() => {
        cy.refreshDatabase().seed();
    });

    it('redirects authenticated users elsewhere', () => {
        cy.login();

        cy.visit('register').assertRedirect('/movies')
    });

    it('loads the sign up page', () => {
        cy.visit('/register').contains('Register');
        cy.request('register').its('status').should('eq', 200); // 3 times faster

        // same as like this
        // cy.request('register').then(response => {
        //     expect(response.status).to.eq(200);
        // });
    });

    it('allows a user to sign up', () => {
        cy.visit('register');
        cy.get('#name').type('cypress');
        cy.get('#username').type('cypressTest');
        cy.get('#email').type('cypress@gmail.com');
        cy.get('#password').type('password');
        cy.contains('button', 'Submit').click();
    });
});
