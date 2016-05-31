arr = gets.chomp.strip.split(' ')
n = arr[0]
q = arr[1]
invited_guest = []

n.to_i.times do
  name = gets.chomp.strip
  invited_guest << name
end

def guest(name, invited_guest)
  return 0 if invited_guest.include?(name)
  1
end

count = 0
q.to_i.times do
  input = gets.chomp.strip
  if input == '0'
    count += 1
  elsif input.to_i != 0
    count += 1 if input.to_i <= 20
  else
    count += guest(input, invited_guest)
  end
end
puts count
