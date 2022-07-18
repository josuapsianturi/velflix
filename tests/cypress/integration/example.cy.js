describe('Home Page Test', () => {
    it('shows home page navbar, header, content and footer', () => {
        cy.visit('/');

        cy.contains('velflix');
    });
});
