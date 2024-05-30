"""Functions for tracking poker hands and assorted card tasks.

Python list documentation: https://docs.python.org/3/tutorial/datastructures.html
"""


def get_rounds(number):
    """Create a list containing the current and next two round numbers.

    :param number: int - current round number.
    :return: list - current round and the two that follow.
    """
    return [number,number+1,number+2]
    pass


def concatenate_rounds(rounds_1, rounds_2):
    """Concatenate two lists of round numbers.

    :param rounds_1: list - first rounds played.
    :param rounds_2: list - second set of rounds played.
    :return: list - all rounds played.
    """
    return rounds_1+rounds_2
    pass


def list_contains_round(rounds, number):
    """Check if the list of rounds contains the specified number.

    :param rounds: list - rounds played.
    :param number: int - round number.
    :return: bool - was the round played?
    """
    for round in rounds:
        if number==round:
            return True
    return False
    pass


def card_average(hand):
    """Calculate and returns the average card value from the list.

    :param hand: list - cards in hand.
    :return: float - average value of the cards in the hand.
    """
    count=0;
    avg=0;
    for i in hand:
        avg=avg+i
        count+=1
    return avg/count
        

    pass



def approx_average_is_average(hand):
    """Return if the (average of first and last card values) OR ('middle' card) == calculated average.

    :param hand: list - cards in hand.
    :return: bool - does one of the approximate averages equal the `true average`?
    """
    count = len(hand)
    
    # Calculate the median
    if count % 2 == 0:
        median = (hand[count // 2] + hand[(count // 2) - 1]) / 2
    else:
        median = hand[count // 2]
    
    # Calculate the average of the first and last card
    avg_first_last = (hand[0] + hand[-1]) / 2
    
    # Calculate the actual average
    actual_avg = card_average(hand)
    
    # Check if either the median or avg_first_last matches the actual average
    return actual_avg == median or actual_avg == avg_first_last

def average_even_is_average_odd(hand):
    """Return if the (average of even indexed card values) == (average of odd indexed card values).

    :param hand: list - cards in hand.
    :return: bool - are even and odd averages equal?
    """
    even_values = [hand[i] for i in range(0, len(hand), 2)]
    odd_values = [hand[i] for i in range(1, len(hand), 2)]

    return (sum(even_values)/len(even_values)==sum(odd_values)/len(odd_values))
        
    pass


def maybe_double_last(hand):
    """Multiply a Jack card value in the last index position by 2.

    :param hand: list - cards in hand.
    :return: list - hand with Jacks (if present) value doubled.
    """
    if(hand[-1]==11):
        hand[-1]=22
    return hand
    pass
